
<?php

class MDC_Donnee_Client extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
    }

    // CREATE
    public function insert_donnee($data)
    {
        $this->db->insert('donnees_client', $data);
        $insert_id = $this->db->insert_id();
        return $this->get_donnee($insert_id);
    }

    //READ
    public function get_donnee($id_donnees_client=NULL,$id_client){
        if ($id_donnees_client !== NULL) {
            $query = $this->db->get_where('donnees_client', array('id_donnees_client' => $id_donnees_client , 'id_client' => $id_client));
            return $query->row_array();
        } else {
            $this->db->select('donnees_client.*, client.nom');
            $this->db->from('donnees_client');
            $this->db->join('client', 'donnees_client.id_client = client.id_client');
            $this->db->where('donnees_client.id_client', $id_client);
            $query = $this->db->get();
            return $query->row_array();
        }
    }

    // UPDATE
    public function update_donnee_client($id_donnees_client, $data) 
    {
        $this->db->where('donnees_client', $id_donnees_client);
        $this->db->update('donnees_client', $data);
        return $this->db->affected_rows();
    }
}
?>