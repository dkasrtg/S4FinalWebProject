<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTA_Sport extends CI_Controller 
{
    public function __construct()
	{
        parent::__construct();
        $this->load->model('MDA_Sport');

    }
    private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('admin/template/Basepage', $v);
	}
	public function index()
	{
       $this->viewer('/sport',array());
    }

}
