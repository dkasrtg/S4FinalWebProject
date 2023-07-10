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
        $this->secondPage($pdf);
        $this->secondPage($pdf);
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
    function secondPage($pdf)
    {
        $pdf->SetMargins(10, 5, 10);
        $pdf->SetAutoPageBreak(false, 5.4);
        $pdf->AddPage('L');
        $pdf->SetFont('Arial', 'B', 12);

        $pdf->Cell(0, 10, 'Semaine 1', 0, 0, 'L');
        $pdf->Cell(0, 10, '2 Aout 2013 a 9 Aout 2013', 0, 1, 'R');
        $pdf->Ln(0);
        $pdf->SetFont('Arial', 'B', 9);
        // Table column headings
        $pdf->Cell(17, 7, '', 1);
        $pdf->Cell(60, 7, 'Petit Dejeuner', 1, 0, 'C');
        $pdf->Cell(60, 7, 'Dejeuner', 1, 0, 'C');
        $pdf->Cell(60, 7, 'Collation', 1, 0, 'C');
        $pdf->Cell(60, 7, 'Diner', 1, 0, 'C');
        $pdf->Cell(20, 7, '', 1);
        $pdf->Ln();

        // Table row 1
        $pdf->Cell(17, 7, 'Jour', 1);
        $pdf->Cell(44, 7, 'Nom', 1);
        $pdf->Cell(16, 7, 'Prix', 1);
        $pdf->Cell(44, 7, 'Nom', 1);
        $pdf->Cell(16, 7, 'Prix', 1);
        $pdf->Cell(44, 7, 'Nom', 1);
        $pdf->Cell(16, 7, 'Prix', 1);
        $pdf->Cell(44, 7, 'Nom', 1);
        $pdf->Cell(16, 7, 'Prix', 1);
        $pdf->Cell(20, 7, 'Total', 1);
        $pdf->Ln();

        // Table rows 2-8
        $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
        for ($i = 0; $i < 7; $i++) {
            $pdf->Cell(17, 20, $days[$i], 1);
            for ($j = 0; $j < 4; $j++) {
                $pdf->SetFont('Arial', '', 9);
                $current_y = $pdf->GetY();
                $current_x = $pdf->GetX();
                $cell_width = 44;
                $pdf->MultiCell($cell_width, 6, "Smoothie aux epinards, avocat et lait d''amande",0, false);
                $pdf->SetXY($current_x + $cell_width, $current_y);
                $pdf->SetFont('Arial', 'B', 9);
                $pdf->Cell(16, 20, '0', 1);
            }
            $pdf->Cell(20, 20, '0', 1);
            $pdf->Ln();
        }

        // Table row for Total
        $pdf->Cell(17, 7, 'Total', 1);
        for ($i = 0; $i < 4; $i++) {
            $pdf->Cell(44, 7, '', 1);
            $pdf->Cell(16, 7, '0', 1);
        }
        $pdf->Cell(20, 7, '0', 1);


        $pdf->Ln(15);
        // Second Table column headings
        $pdf->Cell(39.5, 7, 'Lundi', 1);
        $pdf->Cell(39.5, 7, 'Mardi', 1);
        $pdf->Cell(39.5, 7, 'Mercredi', 1);
        $pdf->Cell(39.5, 7, 'Jeudi', 1);
        $pdf->Cell(39.5, 7, 'Vendredi', 1);
        $pdf->Cell(39.5, 7, 'Samedi', 1);
        $pdf->Cell(39.5, 7, 'Dimanche', 1);
        $pdf->Ln();

        // Second Table row
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(39.5, 7, 'Course', 1);
        $pdf->Cell(39.5, 7, 'Natation', 1);
        $pdf->Cell(39.5, 7, 'Velo', 1);
        $pdf->Cell(39.5, 7, 'Natation', 1);
        $pdf->Cell(39.5, 7, 'Repos', 1);
        $pdf->Cell(39.5, 7, 'Velo', 1);
        $pdf->Cell(39.5, 7, 'Repos', 1);
    }
}
