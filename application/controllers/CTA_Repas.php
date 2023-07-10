<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTA_repas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('MDA_repas');
        $this->load->model('MDA_sport');
	}
	private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('admin/template/Basepage', $v);
	}

	public function display_repas()	{ 
        $data['categ'] = $this->MDA_repas->get_categorie_repas();
        $data['repas']= $this->MDA_repas->get_repas();
		$this->viewer('repas/repas',$data);
	}
    public function insert_repas() {
        $data = array(
            'id_categorie_repas' => $this->input->post('categ'),
            'description' => $this->input->post('desc'),
            'prix' => $this->input->post('prix'),
            'objectif' => $this->input->post('obj'),
            'affectation_poids' => $this->input->post('poids')
        );
        $this->MDA_repas->insert_repas($data);
		redirect('CTA_Repas/display_repas');
	}
    public function delete_repas(){
        $this->MDA_repas->delete_repas($_GET['repas']);
        redirect('CTA_Repas/display_repas');
    }
}
