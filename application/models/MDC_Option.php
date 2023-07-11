<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MDC_Option extends CI_Model
{
    public function solde($id_client){
        $results = $this->db->query("select * from compte_client  where id_client=".$id_client);
        return $results->row_array();
    }

    public function move($id_client,$prix_gold){
        $solde = $this->solde($id_client);
        if($solde['montant']<$prix_gold){
            return "Solde insuffisant";
        }
        $this->db->query("update option_client set id_option=2 where id_client=".$id_client);
        $dat = array(
            'id_client'=>$id_client,
            'description'=>'Changement d option Gold',
            'date_transaction'=>date('Y-m-d'),
            'montant'=>$prix_gold
        );
        $this->db->insert('transactions_client',$dat);
        return "";
    }

    public function option($id_client){
        $result = $this->db->query("select * from option_client join option_ on option_.id_option=option_client.id_option where option_client.id_client=".$id_client);
        $result = $result->row_array();
        return $result;
    }
}
?>