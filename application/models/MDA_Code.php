<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MDA_Code extends CI_Model
{
    public function liste_code($etat){
        $results = $this->db->query("select * from code_argent where etat=".$etat);
        return $results->result_array();
    }

    public function liste_code_crees(){
        return $this->liste_code(0);
    }

    public function liste_code_valable(){
        return $this->liste_code(1);
    }

    public function liste_code_client()
    {
        $results = $this->db->query("select * from code_argent join recharge_client on code_argent.id_code_argent=recharge_client.id_code_argent join client on client.id_client = recharge_client.id_client where date_acceptation is null");
        return $results->result_array();
    }

    public function generer(){
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $uniqueId = substr(str_shuffle($str_result),
                        0, 7);
        $results = $this->db->query("select * from code_argent where code='".$uniqueId."'");
        $results = $results->row_array();
        if($results!==null){
            $this->generer();
        }
        return $uniqueId;
    }

    public function generer_et_inserer($nombre,$montant){
        for ($i=0; $i < $nombre; $i++) { 
            $data = array(
                'code'=>$this->generer(),
                'argent'=>$montant,
                'etat'=>0
            );
            $this->db->insert('code_argent',$data);
        }
    }

    public function vendre($id_code_argent)
    {
        $this->db->query('update code_argent set etat=1 where id_code_argent='.$id_code_argent);
    }

    public function supprimer($id_code_argent)
    {
        $this->db->query('delete from code_argent where id_code_argent='.$id_code_argent);
    }

    public function recharge($id_recharge_client,$date)
    {
        $results = $this->db->query("select * from recharge_client join code_argent on code_argent.id_code_argent=recharge_client.id_code_argent where recharge_client.id_recharge_client=".$id_recharge_client);
        $results = $results->row_array();
        $this->db->query("update recharge_client set date_acceptation='".$date."' where id_recharge_client=".$id_recharge_client);
        $this->db->query("update compte_client set montant=((select montant from compte_client where id_client=".$results['id_client'].")+".$results['argent'].") where id_client=".$results['id_client']);
        $this->db->query("update code_argent set etat=2 where id_code_argent=".$results['id_code_argent']);
        $dat = array(
            'id_client'=>$results['id_client'],
            'description'=>'rechargement',
            'date_transaction'=>$date,
            'montant'=>$results['argent']
        );
        $this->db->insert('transactions_client',$dat);
    }
}
?>