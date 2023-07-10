<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MDC_Pdf extends CI_Model
{

    public function export_facture($pdf)
    {
        $profile = [
            'full_name' => 'John Doe',
            'tel' => '1234567890',
            'email' => 'johndoe@example.com',
            'gender' => 'Male',
            'height' => 180,
            'weight' => 80,
            'desired_weight' => 75
        ];
        $this->firstPage($pdf, $profile);
    }

    public function firstPage($pdf, $profile)
    {
        $pdf->AddPage('L');
        $pdf->SetFont('Arial', 'B', 28);
        $pdf->Cell(0, 100, 'Diet and Sport Activity', 0, 1, 'C');

        $pdf->AddPage('L');
        $pdf->SetFont('Arial', 'B', 16);

        $fullName = $profile['full_name'];
        $tel = $profile['tel'];
        $email = $profile['email'];
        $currentProfile = 'Gender: ' . $profile['gender'] . ', Height: ' . $profile['height'] . ' cm, Weight: ' . $profile['weight'] . ' kg';
        $desiredWeight = 'Desired New Weight: ' . $profile['desired_weight'] . ' kg';

        $pdf->Cell(0, 10, 'Customer Information', 0, 1, 'C');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Full Name:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $fullName, 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Telephone:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $tel, 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Email:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $email, 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Current Profile:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $currentProfile, 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Desired New Weight:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $desiredWeight, 0, 1);
    }
}
