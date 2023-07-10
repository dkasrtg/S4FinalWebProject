<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Donnee_Client extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('MDC_Client');
        $this->load->model('MDC_Donnee_Client');
	}
	private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('client/template/BasePage', $v);
	}

	public function display_donnee()	{ 
		$idC = 1;
		$data['client'] =  $this->MDC_Client->get_client($idC);
		$data['donnee'] =  $this->MDC_Donnee_Client->get_donnee(null,$idC);
		$this->viewer('client/pages/profil/profil',$data);
	}

	public function insert_donnee(){
		$data = array(
            'taille' => $this->input->post('categ'),
            'poids' => $this->input->post('desc'),
            'prix' => $this->input->post('prix'),
            'objectif' => $this->input->post('obj'),
            'affectation_poids' => $this->input->post('poids')
        );
	}
   
}
