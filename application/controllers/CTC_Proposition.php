<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Proposition extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('MDC_Client');
        $this->load->model('MDC_Proposition');
        $this->load->model('MDC_Donnee_Client');
	}
	public function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('client/template/BasePage', $v);
	}
	public function index()	{ 
		$idC = $this->session->userdata('client');
        $lst =   $this->MDC_Donnee_Client->get_latest_donnee($idC);
		$data['latest'] = $lst;
        $data['imc'] =  round($lst['poids'] / (($lst['taille'])^2),2);
        $data['proposition'] = $this->MDC_Proposition->get_proposition($data['imc']);
		$this->viewer('pages/IMC/imc',$data);
	}


}
