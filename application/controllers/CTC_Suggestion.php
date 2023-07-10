<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Suggestion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MDC_Client');
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
        $this->viewer('suggestion/suggestion',array());
    }

    public function new_suggest()
    {

    }
}