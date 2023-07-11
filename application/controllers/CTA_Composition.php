<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTA_Composition extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('admin') === null) 
		{
			redirect(bu('CTA_Login/index?error=' . urlencode('Vous n`êtes pas connectée en tant qu` administrateur')));
		}
        $this->load->model('MDA_Repas');
        $this->load->model('MDA_Composition');
	}
	private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('admin/template/Basepage', $v);
	}
	public function index()	{ 
        $list = $this->MDA_Repas->get_categorie_repas();
        $data['regime'] = $this->MDA_Composition->getAll_composition();
    
		$this->viewer('composition/composition',$data);
	}
    public function insert_composition(){
        $data1 = array(
            'volaille' => $this->input->post('volaille'),
            'poisson' => $this->input->post('poisson'),
            'viande' => $this->input->post('viande')
        );
        //echo $last['id_comp'];
        $this->MDA_Composition->insert_composition($data1);

        $last = $this->MDA_Composition->get_latest_composition($this->input->post('volaille'),$this->input->post('poisson'),$this->input->post('viande'));
        $data2 = array(
            'id_comp' => $last['id_comp'],
            'id_repas' => $this->input->post('repas'),
            'date_insertion' => $this->input->post('date')
        );
        $this->MDA_Composition->insert_regime_composition($data2);
        redirect("CTA_Composition/index");
    }
   
}

?>
