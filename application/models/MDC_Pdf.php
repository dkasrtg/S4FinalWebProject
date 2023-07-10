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
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);

        $fullName = $profile['full_name'];
        $tel = $profile['tel'];
        $email = $profile['email'];
        $currentProfile = 'Gender: ' . $profile['gender'] . ', Height: ' . $profile['height'] . ' cm, Weight: ' . $profile['weight'] . ' kg';
        $desiredWeight = 'Desired New Weight: ' . $profile['desired_weight'] . ' kg';

        $pdf->Cell(0, 10, 'Customer Information', 0, 1, 'C');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12); // Set font style to bold
        $pdf->Cell(0, 10, 'Full Name: ' . $fullName, 0, 1);
        $pdf->Cell(0, 10, 'Telephone: ' . $tel, 0, 1);
        $pdf->Cell(0, 10, 'Email: ' . $email, 0, 1);
        $pdf->Cell(0, 10, 'Current Profile: ' . $currentProfile, 0, 1);
        $pdf->Cell(0, 10, $desiredWeight, 0, 1);
    }
}
