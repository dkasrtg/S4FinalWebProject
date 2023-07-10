<?php

class MDC_Client extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    // READ
    public function get_client($id) { 
        $query = $this->db->get_where('client', array('id_client' => $id));
        return $query->row_array();
    }

    public function getRepasByCategorieAndObjectif() 
    {
        $this->db->select('*');
        $this->db->from('repas');
        $this->db->join('categorie_repas', 'repas.id_categorie_repas = categorie_repas.id_categorie_repas');
        $this->db->where('categorie_repas.objectif <', 0);
        $this->db->order_by('RAND()');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row_array();
    }



    public function getLastWeightByUser($id_client) 
    {
        $this->db->select('poids');
        $this->db->from('client');
        $this->db->where('id_client', $id_client);
        $this->db->order_by('date_poids', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['poids'];
    }

    // LOGIN
    public function verify_login($email, $password) 
    {
        $query = $this->db->get_where('client', array('mail' => $email, 'mot_de_passe' => $password));
        $client = $query->row(0, 'MDC_Client');
        return $client;
    }

    // CREATE
    public function create_client($data)
    {
        $this->db->insert('client', $data);
        $insert_id = $this->db->insert_id();
        return $this->get_client($insert_id);
    }

    // READ
    public function get_client($id_client = NULL) 
    {
        if ($id_client !== NULL) {
            $query = $this->db->get_where('client', array('id_client' => $id_client));
            return $query->row_array();
        } else {
            $query = $this->db->get('client');
            return $query->result_array();
        }
    }

    // UPDATE
    public function update_client($id_client, $data) 
    {
        $this->db->where('id_client', $id_client);
        $this->db->update('client', $data);
        return $this->db->affected_rows();
    }

    // DELETE
    public function delete_client($id_client) 
    {
        $this->db->where('id_client', $id_client);
        $this->db->delete('client');
        return $this->db->affected_rows();
    }
      
    
}
?>