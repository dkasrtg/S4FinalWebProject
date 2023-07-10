<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTA_sport extends CI_Controller
{
	public function __construct() {
		parent::__construct();
	}
	private function viewer($page, $data) {
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('admin/template/Basepage', $v);
	}
	public function display_sport() {
		$this->viewer('sport/sport',array());
	}
	
}
