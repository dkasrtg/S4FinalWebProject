<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MDC_Commande extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('MDA_Repas');
        $this->load->database();
    }
    public function get_all_commande_repas_by_client($_id_client)
    {
        $this->db->select('*');
        $this->db->from('commande_repas');
        $this->db->where('id_client', $_id_client);
        $query = $this->db->get();
        $_commande_repas = $query->result_array();

        foreach($_commande_repas as &$_commande_repa)
        {
            $_commande_repa['repas'] = $this->MDA_Repas->get_repas($_commande_repa['id_repas']);
        }
        return $_commande_repas;
    }

    // Nouvelle commande
    public function insert_commande_repas($data) {
        $this->db->insert('commande_repas', $data);
        return $this->db->insert_id();
    }

    // Option du client
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
