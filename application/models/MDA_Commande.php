<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MDA_Commande extends CI_Model
{
    public function commandes(){
        $results = $this->db->query("select * from commande_repas join client on client.id_client=commande_repas.id_client join repas on repas.id_repas=commande_repas.id_repas where commande_repas.etat=0 order by date_commande");
        return $results->result_array();
    }

    public function commande($id_commande_repas){
        $results = $this->db->query("select * from commande_repas join client on client.id_client=commande_repas.id_client join repas on repas.id_repas=commande_repas.id_repas where commande_repas.id_commande_repas=".$id_commande_repas);
        return $results->row_array();
    }

    public function valider($id_commande_repas,$date){
        $this->db->query("update commande_repas set etat=1 where id_commande_repas=".$id_commande_repas);
        $c = $this->commande($id_commande_repas);
        $prixok = ($c['prix_total']-($c['remise']*$c['prix_total']/100));
        $cc = $this->db->get_where('compte_client', array('id_client' => $c['id_client']));
        $cc = $cc->row_array();
        $montant = $cc['montant'] - $prixok;
        $this->db->query("update compte_client set montant=".$montant." where id_client=".$c['id_client']);
        $dat = array(
            'id_client'=>$c['id_client'],
            'description'=>'paie commande '.$c['description'],
            'date_transaction'=>$date,
            'montant'=>$prixok
        );
        $this->db->insert('transactions_client',$dat);
    }

}
?>