
<?php

class MDA_Repas extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
    }

    // CREATE
    public function insert_repas($data)
    {
        $this->db->insert('repas', $data);
        $insert_id = $this->db->insert_id();
        return $this->get_repas($insert_id);
    }

   //SELECT CATEGORIE
   public function get_categorie_repas(){
        $query = $this->db->get('categorie_repas');
        return $query->result();
   } 

    // READ
    public function get_repas($id_repas = NULL){
        if ($id_repas !== NULL) {
            $query = $this->db->get_where('repas', array('id_repas' => $id_repas));
            return $query->row_array();
        } else {
            $this->db->select('repas.*, categorie_repas.nom_categorie');
            $this->db->from('repas');
            $this->db->join('categorie_repas', 'repas.id_categorie_repas = categorie_repas.id_categorie_repas');
            $query = $this->db->get();
            return $query->result();
        }
    }

    //SELECT
    public function select_repas($data){
            $this->db->select('repas.*, categorie_repas.nom_categorie');
            $this->db->from('repas');
            $this->db->join('categorie_repas', 'repas.id_categorie_repas = categorie_repas.id_categorie_repas');
            $this->db->where('repas.id_categorie_repas = ', $data['id_categorie_repas']);
            $this->db->where('repas.objectif = ', $data['objectif']);
            $this->db->where('repas.prix <= ', $data['prix']);
            $query = $this->db->get();
            return $query->result();
    }

    // UPDATE
    public function update_repas($id_repas, $data) 
    {
        $this->db->where('id_repas', $id_repas);
        $this->db->update('repas', $data);
        return $this->db->affected_rows();
    }

    // DELETE
    public function delete_repas($id_repas) 
    {
        $this->db->where('id_repas', $id_repas);
        $this->db->delete('repas');
        return $this->db->affected_rows();
    }
    
}
