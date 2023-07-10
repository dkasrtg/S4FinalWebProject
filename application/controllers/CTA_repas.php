<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTA_repas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('MDA_repas');
        $this->load->model('MDA_sport');
	}
	private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('admin/template/Basepage', $v);
	}

	public function display_repas()	{
        $data['repas']= $this->MDA_repas->get_repas();
		$this->viewer('repas/repas',$data);
	}
    public function insert_repas() {
		$this->viewer('admin/pages/samples/login');
	}
    public function display_repas_prix(){

    }
}
