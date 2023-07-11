<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Pdf extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('client') === null) 
		{
			redirect(bu('CTC_Login/index?error=' . urlencode('Vous n`êtes pas connectée')));
		}
		$this->load->model('MDC_Pdf');
        $this->load->library('propositionpdf');
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
        $pdf = new Propositionpdf();
        $this->MDC_Pdf->export_facture($pdf);
        $pdf->Output();
	}
}
