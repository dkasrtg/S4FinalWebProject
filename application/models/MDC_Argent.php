<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MDC_Argent extends CI_Model
{
    public function credits(){
        $results = $this->db->query("SELECT MIN(id_code_argent) AS id_code_argent, code, argent, etat FROM code_argent WHERE etat = 1 AND id_code_argent NOT IN (SELECT id_code_argent FROM recharge_client) GROUP BY argent");
        return $results->result_array();
    }

    public function recharge($code,$id_client,$date)
    {
        $results = $this->db->query("select * from code_argent where code='".$code."' and id_code_argent not in(select id_code_argent from recharge_client)");
        $results = $results->row_array();
        if ($results==null) {
            return "Code Invalide";
        }
        $this->db->query("INSERT INTO recharge_client (id_client, id_code_argent, date_demande) VALUES (".$id_client.", ".$results['id_code_argent'].", '".$date."')");
        return "";
    }

    public function rechargement_en_attente($id_client)
    {
        $results = $this->db->query("select * from code_argent join recharge_client on code_argent.id_code_argent=recharge_client.id_code_argent join client on client.id_client = recharge_client.id_client where date_acceptation is null and client.id_client=".$id_client);
        // echo "select * from code_argent join recharge_client on code_argent.id_code_argent=recharge_client.id_code_argent join client on client.id_client = recharge_client.id_client where date_acceptation is null and client.id_client=".$id_client;
        return $results->result_array();
    }

    public function transactions($id_client){
        $results = $this->db->query("select * from transactions_client  where id_client=".$id_client." order by date_transaction desc");
        return $results->result_array();
    }

    public function solde($id_client){
        $results = $this->db->query("select * from compte_client  where id_client=".$id_client);
        return $results->row_array();
    }
}
?>