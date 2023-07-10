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
}
?>