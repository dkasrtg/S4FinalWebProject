<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTA_init extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('admin/template/BasePage', $v);
	}

	public function tolog()
	{
		$this->load->view('admin/pages/samples/login');
	}
	public function insert()
	{
		$this->load->view('admin/pages/samples/register');
	}
<<<<<<< Updated upstream
	public function home(){
		$this->viewer('admin/pages/accueil/index',array());
	}	
=======
	public function home()
	{
		$this->viewer('accueil/index', array());
	}
>>>>>>> Stashed changes
}
