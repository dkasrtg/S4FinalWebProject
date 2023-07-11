<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Commande extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('client') === null) 
		// {
		// 	redirect(bu('CTC_Login/index?error=' . urlencode('Vous n`êtes pas connectée')));
		// }
		$this->load->model('MDC_Client');
		$this->load->model('MDA_Repas');
		$this->load->model('MDC_Commande');
	}

	private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('client/template/BasePage', $v);
	}
	public function index()
	{
		$data = array(
			'repass' => $this->MDA_Repas->get_all_repas()
		);
		$this->viewer('pages/commande/commande', $data);
	}

	public function NewCommande()
	{
		$_client = $this->MDC_Client->get_client($this->session->userdata('client'));

		$_repas = $this->MDA_Repas->get_repas($this->input->post('id_repas'));

		$_option = $this->MDC_Commande->getOptionByClient($_client['id_client'])[0];

		$data = array(
            'id_repas' => $this->input->post('id_repas'),
            'id_client' => $_client['id_client'],
            'prix_total' => $_repas['prix'],
			'remise' => floatval($_option['remise']),
            'date_commande' => $this->input->post('date_commande'),
            'etat' => 0
        );

		$this->MDC_Commande->insert_commande_repas($data);

		redirect(bu('CTC_Commande'));
	}
}
