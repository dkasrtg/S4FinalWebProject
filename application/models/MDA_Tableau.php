<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MDA_Tableau extends CI_Model
{
    public function buts(){
        $results = $this->db->query("select * from but");
        return $results->result_array();
    }
    public function nombre_utilisateur()
    {
        $buts = $this->buts();
        $tot = 0;
        $rep = [];
        $field = [];
        for ($i=0; $i < count($buts); $i++) { 
            $result = $this->db->query(" select count(id_but_client) as c from but_client where id_but=".$buts[$i]['id_but']);
            $result = $result->row_array();
            $tot += $result['c'];
            array_push($rep,$result['c']);
            array_push($field,$buts[$i]['nom']);
        }
        return array(
            'total'=>$tot,
            'rep'=>$rep,
            'field'=>$field
        );
    }

    public function solde(){
        $result = $this->db->query("select coalesce(sum(argent),0) as c from code_argent where etat=2");
        $result =  $result->row_array();
        $credit = $result['c'];
        $result = $this->db->query("select coalesce(sum(montant),0) as c from transactions_client where description like 'paie commande'");
        $result =  $result->row_array();
        $commande = $result['c'];
        $sortie = 0;
        return array(
            'rep'=>[$credit,$commande,$sortie],
            'total'=>$credit+$commande-$sortie
        );
    }

    public function creditmois($y){
        $rs = [];
        for ($i=1; $i < 13; $i++) { 
            $result = $this->db->query(" select coalesce(sum(argent),0) as c from recharge_client join code_argent on recharge_client.id_code_argent=code_argent.id_code_argent where year(date_acceptation)=".$y." and month(date_acceptation)=".$i);
            $result = $result->row_array();
            array_push($rs,$result['c']);
        }
        return $rs;
    }

    public function commandemois($y){
        $rs = [];
        for ($i=1; $i < 13; $i++) { 
            $result = $this->db->query("select coalesce(count(id_commande_client),0) as c from commande_client where year(date_commande)=".$y." and month(date_commande)=".$i);
            $result = $result->row_array();
            array_push($rs,$result['c']);
        }
        return $rs;
    }
}
?>