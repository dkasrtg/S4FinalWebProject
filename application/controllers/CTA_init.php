<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTA_init extends CI_Controller {
	public function __construct(){
        parent::__construct();
    }
    private function viewer($page,$data){
        $v = array(
            'page'=>$page,
            'data'=>$data
        );
        $this->load->view('admin/template/BasePage',$v);
    }

	public function tolog()	{
		$this->load->view('admin/pages/samples/login');
	}
	public function insert(){
		$this->load->view('admin/pages/samples/register');
	}
	public function home(){
		$this->viewer('accueil/index',array());
	}	
}
