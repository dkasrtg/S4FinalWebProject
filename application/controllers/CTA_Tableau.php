<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTA_Tableau extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MDA_Tableau');
	}
	private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('admin/template/BasePage', $v);
	}
	public function index()
	{
        $data = array();
		$this->viewer('/tableau', $data);
	}
}
