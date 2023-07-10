<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MDA_Sport extends CI_Model
{
    public function liste_activite_sportives(){
        $results = $this->db->query("select * from activite_sportive");
        return $results->result_array();
    }
}
?>