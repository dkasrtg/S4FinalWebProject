<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MDA_repas extends CI_Model{

    public function insert_repas($data)    {
        $this->db->insert('repas', $data);
    }
    public function get_repas() {
        $this->db->select('repas.*, categorie_repas.nom_categorie');
        $this->db->from('repas');
        $this->db->join('categorie_repas', 'repas.id_categorie_repas = categorie_repas.id_categorie_repas');
        $query = $this->db->get();
        return $query->result();
    }    
    public function get_repas_prix($data){
        $query = $this->db->get_where('repas', array('prix' => $prix), array('categ' => $categ));
        return $query->row();
    }
    public function get_repas_cp(){
        $query = $this->db->get_where('repas', array('prix' => $prix), array('categ' => $categ) , array('poids' => $poids));
        return $query->row();
    }
}
?>