<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTA_Commande extends CI_Controller 
{
    public function __construct()
	{
        parent::__construct();
		if($this->session->userdata('admin') === null) 
		{
			redirect(bu('CTA_Login/index?error=' . urlencode('Vous n`êtes pas connectée en tant qu` administrateur')));
		}
        $this->load->model('MDA_Commande');

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
			'commandes'=>$this->MDA_Commande->commandes()
		);
       $this->viewer('/commande',$data);
    }

	public function valider(){
		$id_commande_repas = $this->input->get('id_commande_repas');
		$date = $this->input->get('date');
		$this->MDA_Commande->valider($id_commande_repas,$date);
		redirect('CTA_Commande');
	}
}