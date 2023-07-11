
<?php

class MDC_Proposition extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
    }
    public function get_proposition($imc) {
        $this->db->where('max >', $imc);
        $this->db->where('min <', $imc);
        $query = $this->db->get('proposition');
        return $query->row_array();
    }    
}
?>