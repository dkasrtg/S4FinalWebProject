<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Proposition extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('client') === null) 
		{
			redirect(bu('CTC_Login/index?error=' . urlencode('Vous n`êtes pas connectée')));
		}
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
		$idC = $this->session->user_data('client');
        $lst =   $this->MDC_Donnee_Client->get_latest_donnee($idC);
		$data['latest'] = $lst;
        $data['imc'] =  $this->MDC_Proposition->get_imc($lst['poids'],$lst['taille']);
		$data['idealp'] = $this->MDC_Proposition->get_poids_ideal($lst['taille']);
		$data['idealc'] = $this->MDC_Proposition->get_imc($data['idealp'],$lst['taille']);
        $data['proposition'] = $this->MDC_Proposition->get_proposition($data['imc']);
		$this->viewer('pages/IMC/imc',$data);
	}


}
