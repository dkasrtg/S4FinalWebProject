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


    public function client(){
        $clients = $this->db->query("select * from client");
        $clients = $clients->result_array();
        for ($i=0; $i < count($clients); $i++) { 
            $qlast = $this->db->query("select * from donnees_client where id_client=".$clients[$i]['id_client']." order by date_donnees desc limit 1");
            $last = $qlast->row_array();
            if($qlast->num_rows()===0){
                $clients[$i]['poids']='';
            }
            else {
                $clients[$i]['poids']=$last['poids'];
            }
            $qlast = $this->db->query("select * from but_client join but on but.id_but=but_client.id_but where but_client.id_client=".$clients[$i]['id_client']);
            $last = $qlast->row_array();
            $clients[$i]['but'] = $last['nom'];
            $qlast = $this->db->query("select * from compte_client where id_client=".$clients[$i]['id_client']);
            $last = $qlast->row_array();
            $clients[$i]['solde'] = $last['montant'];
            $qlast = $this->db->query("select  count(id_commande_client) as c from commande_client where id_client=".$clients[$i]['id_client']);
            $last = $qlast->row_array();
            $clients[$i]['commande'] = $last['c'];
            $qlast = $this->db->query("select coalesce(sum(argent),0) as c from recharge_client join code_argent on code_argent.id_code_argent=recharge_client.id_code_argent where id_client=".$clients[$i]['id_client']." and date_acceptation is not null");
            $last = $qlast->row_array();
            $clients[$i]['credit'] = $last['c'];
        }
        return $clients;
    }

}
?>