<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Argent extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
		$error = "";
		if ($this->input->get('error')!==null) {
			$error = $this->input->get('error')!==null;
		}
		$data = array(
			'liste_code'=>$this->MDC_Argent->credits(),
			'error'=>$error
		);
		$this->viewer('client/pages/argent', $data);
	}

	public function recharger(){
		$code = $this->input->get('code');
		redirect('CTC_Argent/index');
	}
}
