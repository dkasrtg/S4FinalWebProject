<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Login extends CI_Controller
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
        $this->load->view('client/template/Basepage',$v);
    }

    public function index()
    {
        $data = array();
        if($this->input->get('error') != null)
        {
            $data['error'] = $this->input->get('error');
        }
        $this->load->view('client/login/login', $data);
    }

    public function Register()
    {
        $this->load->view('client/login/register');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');

        $_Client = $this->MDC_Client->verify_login($email, $mdp);

        if ($_Client)
        {
            $this->session->set_userdata('client', $_Client->id_client);
            redirect(bu('CTC_Suggestion'));
            return;
        }
        else
        {
            $data['error'] = 'Email ou mot de passe invalide';
        }

        redirect(bu('CTC_Login/index?error=' . urlencode($data['error'])));
    }

    public function addClient()
    {
        $clientData = array(
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'date_de_naissance' => $this->input->post('date_de_naissance'),
            'mail' => $this->input->post('mail'),
            'tel' => $this->input->post('tel'),
            'mot_de_passe' => $this->input->post('mot_de_passe')
        );

        $result = $this->MDC_Client->create_client($clientData);

        if ($result) {
            $data['success'] = 'Nouveau client ajouté avec succès';
            redirect(bu('CTC_Login/index?success=' . urlencode($data['success'])));
        } else {
            $data['error'] = 'Erreur lors de l\'ajout du nouvel client';
            redirect(bu('CTC_Login/index?error=' . urlencode($data['error'])));
        }
    }
    
    //DECONNEXION
    public function deconnect()	{
        $this->session->unset_userdata('client');
        redirect(bu('CTC_Login/index'));
    }
}
