<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Suggestion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MDC_Client');
        $this->load->model('MDC_Suggestion');
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
        $data = array(
            'client' => $this->MDC_Client->get_client($this->session->userdata('client')),
            'donnees_client' => $this->MDC_Client->get_donnees_client($this->session->userdata('client')),
        );
        $this->viewer('suggestion/suggestion', $data);
    }

    public function new_suggest()
    {
        $_dateDebut = $this->input->post('date_debut');
        $_client = $this->MDC_Client->get_client($this->session->userdata('client'));
        $_target = floatval($this->input->post('target'));

        $data = array(
            'client' => $_client,
            'date_debut' => $_dateDebut,
            'target' => $_target,
            'donnees_client' => $this->MDC_Client->get_donnees_client($this->session->userdata('client')),
            'suggestions' => $this->MDC_Suggestion->generateListeSuggestion($_dateDebut, $_client, $_target)
        );

        $suggestions = $data['suggestions'];
        $suggestions = $this->MDC_Suggestion->buildEventData($suggestions);
        $data['suggestionsGson'] = $suggestions;

        $this->viewer('suggestion/suggestion',$data);
    }
}