<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTA_Sport extends CI_Controller 
{
    public function __construct()
	{
        parent::__construct();
        $this->load->model('MDA_Sport');

    }
    private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('admin/template/Basepage', $v);
	}
	public function index()
	{
		$data = array(
			'activite_sportives' => $this->MDA_Sport->liste_activite_sportives()
		);
       $this->viewer('/sport',$data);
    }

	public function store()
	{
		$data = array(
			'nom' => $this->input->post('nom'),
			'objectif' => $this->input->post('objectif'),
			'affectation_poids' => $this->input->post('affectation_poids')
		);
		$this->MDA_Sport->insert_activite_sportive($data);
		redirect(bu('CTA_Sport'));
    }

	public function delete()
	{
		$id_activite_sportive = $this->input->get('id_activite_sportive');
		$this->MDA_Sport->delete_activite_sportive($id_activite_sportive);
		// var_dump($id_activite_sportive);
		redirect(bu('CTA_Sport'));
    }
}
