
<?php

class MDA_Admin extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
    }

    // LOGIN
    public function verify_login($email, $password) 
    {
        $query = $this->db->get_where('admin', array('email' => $email, 'mdp' => $password));
        $admin = $query->row(0, 'MDA_Admin');
        return $admin;
    }

    // CREATE
    public function create_admin($data)
    {
        $this->db->insert('admin', $data);
        $insert_id = $this->db->insert_id();
        return $this->get_admin($insert_id);
    }

    // READ
    public function get_admin($id_admin = NULL) 
    {
        if ($id_admin !== NULL) {
            $query = $this->db->get_where('admin', array('id_admin' => $id_admin));
            return $query->row_array();
        } else {
            $query = $this->db->get('admin');
            return $query->result_array();
        }
    }

    // UPDATE
    public function update_admin($id_admin, $data) 
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $data);
        return $this->db->affected_rows();
    }

    // DELETE
    public function delete_admin($id_admin) 
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->delete('admin');
        return $this->db->affected_rows();
    }
    
}
