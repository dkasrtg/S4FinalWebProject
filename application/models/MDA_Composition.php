
<?php

class MDA_Composition extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
    }

    // CREATE
    public function insert_composition($data)
    {
        $this->db->insert('composition', $data);
        $insert_id = $this->db->insert_id();
    }
    //CREATE
    public function insert_regime_composition($data)
    {
        $this->db->insert('regime_composition', $data);
        $insert_id = $this->db->insert_id();
    }

    //LATEST
    public function get_latest_composition($v,$p,$vd) {
        $this->db->select('*');
        $this->db->from('composition');
        $this->db->where('volaille', $v);
        $this->db->where('poisson', $p);
        $this->db->where('viande', $vd);
        $this->db->order_by('id_comp', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row_array();
    }

    //COMP
    public function getAll_composition() {
        $this->db->select('rp.id_repas, cp.id_comp,cr.nom_categorie, rp.description, cp.volaille, cp.viande, cp.poisson, rg.date_insertion');
        $this->db->from('repas rp');
        $this->db->join('categorie_repas cr', 'rp.id_categorie_repas = cr.id_categorie_repas', 'LEFT');
        $this->db->join('regime_composition rg', 'rp.id_repas = rg.id_repas', 'LEFT');
        $this->db->join('composition cp', 'rg.id_comp = cp.id_comp', 'LEFT');
        $this->db->where('rg.date_insertion IS NULL OR rg.date_insertion = (
            SELECT MAX(date_insertion)
            FROM regime_composition
            WHERE id_repas = rp.id_repas
        )');
        $this->db->order_by('rg.date_insertion', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    

}
