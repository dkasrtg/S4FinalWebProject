<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Donnee_Client extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('MDC_Client');
        $this->load->model('MDC_Donnee_Client');
	}
	private function viewer($page, $data)
	{
		$v = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('client/template/BasePage', $v);
	}

	public function index()	{ 
		$idC = 1;
		$data['client'] =  $this->MDC_Client->get_client($idC);
		$data['donnee'] =  $this->MDC_Donnee_Client->get_donnee(null,$idC);
		$data['latest'] =   $this->MDC_Donnee_Client->get_latest_donnee($idC);
		$this->viewer('pages/profil/profil',$data);
	}

	public function insert_donnee(){
		$idC = 1;
		$data = array(
			'id_client' => $idC,
            'taille' => $this->input->post('taille'),
            'poids' => $this->input->post('poids'),
            'genre' => $this->input->post('genre'),
			'date_donnees' => $this->input->post('date')
        );
		$this->MDC_Donnee_Client-> insert_donnee($data,null);
		redirect("CTC_Donnee_Client/index");
	}
	public function load_update(){
		$idC =  1;
		$data['update'] =   $this->MDC_Donnee_Client->get_donnee($_GET['donnee'],$idC);
		$this->viewer('pages/profil/update',$data);
	}
	public function update_donnee(){
		$idC =  1;
		$data = array(
			'id_client' => $idC,
            'taille' => $this->input->post('taille'),
            'poids' => $this->input->post('poids'),
            'genre' => $this->input->post('genre'),
			'date_donnees' => $this->input->post('date')
        );
		$this->MDC_Donnee_Client->update_donnee_client($_POST['update'],$data);
		redirect('CTC_Donnee_Client/index');
	}
	public function select_donnee(){
		$idC =  1;
		$data = array(
			'id_client' => $idC,
            'taille' => $this->input->post('taille'),
            'poids' => $this->input->post('poids'),
			'date_donnees' => $this->input->post('date')
        );
		$data['client'] =  $this->MDC_Client->get_client($idC);
		$data['latest'] =   $this->MDC_Donnee_Client->get_latest_donnee($idC);
		$data['donnee'] = $this->MDC_Donnee_Client->select_donnee($idC,$data);
		$this->viewer('pages/profil/profil',$data);
	}
   
}

?>
