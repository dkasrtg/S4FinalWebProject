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
		$this->viewer('pages/profil/profil',$data);
	}

	public function insert_donnee(){
		$data = array(
			'id_client' => $this->input->post('id'),
            'taille' => $this->input->post('taille'),
            'poids' => $this->input->post('poids'),
            'genre' => $this->input->post('genre'),
			'date_donnees' => $this->input->post('date')
        );
		$this->MDC_Donnee_Client-> insert_donnee($data,null);
		redirect("CTC_Donnee_Client/display_donnee");
	}
   
}
