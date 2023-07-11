<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTC_Pdf extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('client') === null) {
			redirect(bu('CTC_Login/index?error=' . urlencode('Vous n`êtes pas connectée')));
		}
		$this->load->model('MDC_Pdf');
		$this->load->library('propositionpdf');
	}
	public function index()
	{
		$pdf = new Propositionpdf();
		$data = $this->session->userdata('data');
		$fin = array();
		$fins = array();
		$tot = 0;
		$table = [
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]],
			[['', 0], ['', 0], ['', 0], ['', 0]]
		];
		$tables = ['', '', '', '', '', '', ''];
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
			for ($q=0; $q < 4; $q++) { 
				$tot += $tableuse[$dayOfWeek][$q][1];
			}
			$tableuses[$dayOfWeek] = $data['suggestionsGson'][$i + 1]['title'];
			if ($dayOfWeek == 6) {
				$dateTime->modify('this week');
				$weekStart = $dateTime->format('Y-m-d');
				$dateTime->modify('this week +6 days');
				$weekEnd = $dateTime->format('Y-m-d');
				$ok = array(
					'start' => $weekStart,
					'end' => $weekEnd,
					'data' => $tableuse
				);
				array_push($fin, $ok);
				array_push($fins, $tableuses);
				$tableuse = $table;
				$tableuses = $tables;
			}
		}
		$a = $fin[0]['start'];
		$b = $fin[count($fin)-1]['end'];
		$dure = $this->MDC_Pdf->dure($a,$b);
		$genre = "Homme";
		if ($data['donnees_client']['genre']==2) {
			$genre = "Femme";
		}
		$profile = [
			'full_name' => $data['client']['nom'] . " " . $data['client']['prenom'],
			'tel' => $data['client']['tel'],
			'email' => $data['client']['mail'],
			'gender' => $genre,
			'height' => $data['donnees_client']['taille'],
			'weight' => $data['donnees_client']['poids'],
			'desired_weight' => $data['target'],
			'duration' => $dure,
			'total' => $tot
		];
		$this->MDC_Pdf->export_facture($pdf, $fin, $fins, $profile);
		$pdf->Output();
	}
}
