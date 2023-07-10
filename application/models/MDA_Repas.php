
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

    // READ
    public function get_repas($id_repas = NULL) 
    {
        if ($id_repas !== NULL) {
            $query = $this->db->get_where('repas', array('id_repas' => $id_repas));
            return $query->row_array();
        } else {
            $query = $this->db->get('repas');
            return $query->result_array();
        }
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
