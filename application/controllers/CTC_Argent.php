<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Argent extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('client') === null) 
		{
			redirect(bu('CTC_Login/index?error=' . urlencode('Vous n`êtes pas connectée')));
		}
		$this->load->model('MDC_Argent');
	}
	private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('client/template/BasePage', $v);
	}
	public function index()
	{
		$id_client = 1;
		$error = "";
		if ($this->input->get('error')!==null) {
			$error = $this->input->get('error');
		}
		$data = array(
			'liste_code'=>$this->MDC_Argent->credits(),
			'error'=>$error,
			'rechargement_en_attente'=>$this->MDC_Argent->rechargement_en_attente($id_client),
			'transactions'=>$this->MDC_Argent->transactions($id_client),
			'solde'=>$this->MDC_Argent->solde($id_client)
		);
		$this->viewer('pages/argent', $data);
	}

	public function recharger(){
		$id_client = 1;
		$date = date('Y-m-d');
		$code = $this->input->get('code');
		$error = $this->MDC_Argent->recharge($code,$id_client,$date);
		redirect(bu('CTC_Argent/index?error='.$error));
	}
}
