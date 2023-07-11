<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTA_Login extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('MDA_Admin');
    }

    private function viewer($page,$data)
    {
        $v = array(
            'page'=>$page,
            'data'=>$data
        );
        $this->load->view('admin/template/Basepage',$v);
    }

    public function index()
    {
        $this->load->view('admin/pages/samples/login');
    }
    
    public function login()
    {
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        
        $_Admin = $this->MDA_Admin->verify_login($email, $mdp);
        
        if ($_Admin)
        {
            $this->session->set_userdata('admin', $_Admin);
            redirect(bu('CTA_Admin'));
            return ;
        }
        else 
        {
            $data['error'] = 'Email ou mot de passe invalide';
        }

        redirect(bu('CTA_Login/index?error=' . urlencode($data['error'])));
    }
    //DECONNEXION
    public function deconnect()	{
        $this->session->unset_userdata('admin');
        redirect('CTA_Login/login');
    }
    public function addAdmin()
    {
        $motcle = $this->input->post('superadmin');

        if($motcle != "superadmin")
        {
            $data['error'] = 'Seule les supers administrateurs peuvent ajouter les admin';
            $this->load->view('admin/pages/samples/login', $data);
            return;
        }

        $adminData = array(
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'email' => $this->input->post('email'),
            'mdp' => $this->input->post('mdp')
        );
        
        $result = $this->MDA_Admin->create_admin($adminData);
        
        if ($result) $data['success'] = 'Nouveau admin ajouté avec succès';
        else $data['error'] = 'Erreur lors de l\'ajout du nouvel admin';

        $this->load->view('admin/pages/samples/login', $data);
    }
    
}
