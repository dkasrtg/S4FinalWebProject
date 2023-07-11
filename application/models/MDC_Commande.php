<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MDC_Commande extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_commande_repas($data) {
        $this->db->insert('commande_repas', $data);
        return $this->db->insert_id();
    }

    public function getOptionByClient($_idClient)
    {
        $this->db->select('option_.nom, option_.remise');
        $this->db->from('option_');
        $this->db->join('option_client', 'option_.id_option = option_client.id_option');
        $this->db->where('option_client.id_client', $_idClient);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function read($id_commande_repas) {
        $query = $this->db->get_where('commande_repas', array('id_commande_repas' => $id_commande_repas));
        return $query->row_array();
    }

    public function update($id_commande_repas, $id_repas, $id_client, $prix_total, $date_commande, $etat) {
        $data = array(
            'id_repas' => $id_repas,
            'id_client' => $id_client,
            'prix_total' => $prix_total,
            'date_commande' => $date_commande,
            'etat' => $etat
        );
        $this->db->where('id_commande_repas', $id_commande_repas);
        $this->db->update('commande_repas', $data);
    }

    public function delete($id_commande_repas) {
        $this->db->delete('commande_repas', array('id_commande_repas' => $id_commande_repas));
    }
}
