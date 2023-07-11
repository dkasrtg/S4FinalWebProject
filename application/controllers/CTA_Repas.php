<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTA_repas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('MDA_Repas');
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
        $data['categ'] = $this->MDA_Repas->get_categorie_repas();
        $data['repas']= $this->MDA_Repas->get_repas();
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
        $this->MDA_Repas->insert_repas($data);
		redirect('CTA_Repas/display_repas');
	}
    public function delete_repas(){
        $this->MDA_Repas->delete_repas($_GET['repas']);
        redirect('CTA_Repas/display_repas');
    }
	public function select_repas() {
        $data = array(
            'id_categorie_repas' => $this->input->post('categ'),
            'prix' => $this->input->post('prix'),
            'objectif' => $this->input->post('obj')
        );
		$data['categ'] = $this->MDA_Repas->get_categorie_repas();
		$data['repas'] =$this->MDA_Repas->select_repas($data);
		$this->viewer('repas/repas',$data);
	}
}
