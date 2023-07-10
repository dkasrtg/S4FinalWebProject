<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MDC_Argent extends CI_Model
{
    public function credits(){
        $results = $this->db->query("SELECT MIN(id_code_argent) AS id_code_argent, code, argent, etat FROM code_argent WHERE etat = 1 AND id_code_argent NOT IN (SELECT id_code_argent FROM recharge_client) GROUP BY argent");
        return $results->result_array();
    }
}
?>