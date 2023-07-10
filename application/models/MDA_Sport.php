<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MDA_sport extends CI_Model{
    public function insert_sport($data) {
        $this->db->insert('sport', $data);
    }
    public function get_sport($data){
        $query = $this->db->get();;
        return $query->row();
    }
    public function get_sport_obj($data){
        $query = $this->db->get_where('sport', array('objectif' => $obj));
        return $query->row();
    }
}
?>