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
		$data = array(
			'liste_code_crees'=>$this->MDA_Code->liste_code_crees(),
			'liste_code_valables'=>$this->MDA_Code->liste_code_valable()
		);
       $this->viewer('admin/pages/code',$data);
    }

	public function creer()
	{
		$nombre = $this->input->get('nombre');
		$montant = $this->input->get('montant');
		$this->MDA_Code->generer_et_inserer($nombre,$montant);
		redirect('CTA_Code/index');
	}

	public function vendre()
	{
		$id_code_argent = $this->input->get('id_code_argent');
		$this->MDA_Code->vendre($id_code_argent);
		redirect('CTA_Code/index');
	}

	public function supprimer()
	{
		$id_code_argent = $this->input->get('id_code_argent');
		$this->MDA_Code->supprimer($id_code_argent);
		redirect('CTA_Code/index');
	}

}