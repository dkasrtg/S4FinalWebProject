<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Option extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
		$id_client = 1;
		$data = array();
		$this->viewer('client/pages/option', $data);
	}
}
