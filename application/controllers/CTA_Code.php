<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTA_Code extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('MDA_Code');

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
       $this->viewer('admin/pages/sport',array());
    }

	public function creer(Type $var = null)
	{
		$nombre = $this->input->get('nombre');
		$montant = $this->input->get('montant');
		$this->MDA_Code->generer_et_inserer($nombre,$montant);
		redirect('CTA_Code/index');
	}

}