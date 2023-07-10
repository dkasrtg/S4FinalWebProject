<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MDA_Sport extends CI_Model
{
    public function liste_activite_sportives()
    {
        $results = $this->db->query("select * from activite_sportive");
        $activites = $results->result_array();
        for ($i = 0 ; $i < count($activites) ; $i++) {
            $activite = &$activites[$i];
            $objectif = $activite['objectif'];
            if ($objectif < 0) {
                $activite['objectif_letter'] = 'diminuant';
            } else {
                $activite['objectif_letter'] = 'augmentant';
            }
        }
        return $activites;
    }

    // CREATE
    public function insert_activite_sportive($data)
    {
        $this->db->insert('activite_sportive', $data);
        $insert_id = $this->db->insert_id();
        return $this->get_activite_sportive($insert_id);
    }

    // READ
    public function get_activite_sportive($id_activite_sportive = NULL) 
    {
        if ($id_activite_sportive !== NULL) {
            $query = $this->db->get_where('activite_sportive', array('id_activite_sportive' => $id_activite_sportive));
            return $query->row_array();
        } else {
            $query = $this->db->get('activite_sportive');
            return $query->result_array();
        }
    }

    // UPDATE
    public function update_activite_sportive($id_activite_sportive, $data) 
    {
        $this->db->where('id_activite_sportive', $id_activite_sportive);
        $this->db->update('activite_sportive', $data);
        return $this->db->affected_rows();
    }

    // DELETE
    public function delete_activite_sportive($id_activite_sportive) 
    {
        $this->db->where('id_activite_sportive', $id_activite_sportive);
        $this->db->delete('activite_sportive');
        return $this->db->affected_rows();
    }
}
?>