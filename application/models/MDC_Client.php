<?php

class MDC_Client extends CI_Model 
{

    public function __construct() {
        parent::__construct();
    }

    // CREATE
    public function get_client($id) { 
        $query = $this->db->get_where('client', array('id_client' => $id));
        return $query->row_array();
    }
}
?>