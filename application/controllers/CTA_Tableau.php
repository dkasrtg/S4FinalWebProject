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
		$this->load->view('admin/template/Basepage', $v);
	}
	public function index()
	{
        $data = array(
            'nombreuser'=>$this->MDA_Tableau->nombre_utilisateur(),
            'solde'=>$this->MDA_Tableau->solde(),
            'creditmois'=>$this->MDA_Tableau->creditmois(2023),
            'commandemois'=>$this->MDA_Tableau->commandemois(2023),
            'clients'=>$this->MDA_Tableau->client(),
            'regimes'=>$this->MDA_Tableau->regime(),
            'sports'=>$this->MDA_Tableau->sport(),
        );
		$this->viewer('/tableau', $data);
	}
}
