
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
    public function get_imc($poids,$taille){
        $imc = round($poids/(($taille)^2),2);
        return $imc;
    }
    public function get_poids_ideal($taille) {
        $poids = 1;
        $imc = 0;
        while ($imc < 19 || $imc > 25) {
            $imc = $poids / ($taille ** 2);
            if ($imc < 19) {
                $poids++;
            } else if ($imc > 25) {
                $poids--;
                break;
            }
        }
        return $poids;
    }    
     
}
?>