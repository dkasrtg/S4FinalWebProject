<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Option extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('client') === null) 
		{
			redirect(bu('CTC_Login/index?error=' . urlencode('Vous n`êtes pas connectée')));
		}
		$this->load->model('MDC_Option');
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
		if($this->input->get("error")!==null){
			$error = $this->input->get("error");
		}
		$id_client = 1;
		$opt = $this->MDC_Option->option($id_client);
		$hid = "";
		$class = "primary";
		if($opt['id_option']==2){
			$hid = "hidden";
			$class = "warning";
		}
		$data = array(
			'option'=>$opt['nom'],
			'hid'=>$hid,
			'class'=>$class,
			'error'=>$error
		);
		$this->viewer('pages/option', $data);
	}

	public function move(){
		$prix_gold = 3000;
		$id_client = 1;
		$error = $this->MDC_Option->move($id_client,$prix_gold);
		redirect("CTC_Option/index?error=".$error);
	}


	
}
