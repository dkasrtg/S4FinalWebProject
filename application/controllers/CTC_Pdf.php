<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Pdf extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
		$data = $this->session->userdata('data');
		$fin = array();
		$fins = array();
		$table = [
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]]
		];
		$tables = ['','','','','','',''];
		$tableuse = $table;
		$tableuses = $tables;
		for ($i = 0; $i < count($data['suggestionsGson']) - 1; $i += 8) {
			$dateTime = new DateTime((explode('T', $data['suggestionsGson'][$i]['start']))[0]);
			$dayOfWeek = $dateTime->format('N') - 1;
			$tableuse[$dayOfWeek][0][0] = $data['suggestionsGson'][$i]['title'];
			$tableuse[$dayOfWeek][0][1] = $data['suggestionsGson'][$i]['prix'];
			$tableuse[$dayOfWeek][1][0] = $data['suggestionsGson'][$i + 2]['title'];
			$tableuse[$dayOfWeek][1][1] = $data['suggestionsGson'][$i + 2]['prix'];
			$tableuse[$dayOfWeek][2][0] = $data['suggestionsGson'][$i + 4]['title'];
			$tableuse[$dayOfWeek][2][1] = $data['suggestionsGson'][$i + 4]['prix'];
			$tableuse[$dayOfWeek][3][0] = $data['suggestionsGson'][$i + 6]['title'];
			$tableuse[$dayOfWeek][3][1] = $data['suggestionsGson'][$i + 6]['prix'];
			$tableuses[$dayOfWeek] = $data['suggestionsGson'][1][0]['nom'];
			if ($dayOfWeek == 6) {
				$weekStart = $dateTime->format('Y-m-d');
				$dateTime->modify('this week +6 days');
				$weekEnd = $dateTime->format('Y-m-d');
				$ok = array(
					'start'=>$weekStart,
					'end'=>$weekEnd,
					'data'=>$tableuse
				);
				array_push($fin,$ok);
				array_push($fins,$tableuses);
				$tableuse = $table;
				$tableuses = $tables;
			}
		}
		echo json_encode($data['client']);
		echo json_encode($data['target']);
		echo json_encode($data['donnees_client']);
		$profile = [
            'full_name' => $data['client']['nom']." ".$data['client']['prenom'],
            'tel' => $data['client']['tel'],
            'email' => $data['client']['mail'],
            'gender' => $data['client']['genre'],
            'height' => $data['client']['taille'],
            'weight' => $data['client']['poids'],
            'desired_weight' => $data['target'],
            'duration'=>'3',
            'total'=>4000
        ];
		$this->MDC_Pdf->export_facture($pdf,$fin,$fins,$profile);
		$pdf->Output();
	}
}
