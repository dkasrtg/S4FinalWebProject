<?php

class CTC_Login extends CI_Controller 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->load->model('user_model');
    }

    private function viewer($page,$data)
    {
        $v = array(
            'page'=>$page,
            'data'=>$data
        );
        $this->load->view('client/template/BasePage',$v);
    }

    public function index() 
    {
        $data = array();
        $this->viewer("client/index",$data);
    }

}
