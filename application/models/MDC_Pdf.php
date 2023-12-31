<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MDC_Pdf extends CI_Model
{

    public function dure($date1, $date2)
    {
        // $date1 = '2023-07-01'; // Replace with your first date
        // $date2 = '2023-08-06'; // Replace with your second date

        // Create DateTime objects from the given dates
        $dateTime1 = new DateTime($date1);
        $dateTime2 = new DateTime($date2);

        // Calculate the difference between the two dates
        $interval = $dateTime1->diff($dateTime2);

        // Get the total number of days
        $days = $interval->days;

        // Calculate the months and remaining days
        $months = floor($days / 30);
        $remainingDays = $days % 30;

        // Output the result
        if ($months > 0) {
            return $months . " month(s) " . $remainingDays . " day(s)";
        } 
        return $days . " day(s)";
    }

    public function export_facture($pdf,$fin,$fins,$profile)
    {
        $this->firstPage($pdf, $profile);
        for ($i = 0; $i < count($fin); $i++) {
            $this->secondPage($pdf, $fin[$i], $fins[$i],$i+1);
        }
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
        $duration = $profile['duration'];
        $total  = $profile['total'];


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

        $pdf->Ln(30);

        $pdf->SetFont('Arial', 'B', 15);
        $pdf->Cell(70, 10, 'Treatment Duration:', 0, 0);
        $pdf->SetFont('Arial', '', 15);
        $pdf->Cell(0, 10, $duration, 0, 1);

        $pdf->SetFont('Arial', 'B', 15);
        $pdf->Cell(70, 10, 'Total Cost:', 0, 0);
        $pdf->SetFont('Arial', '', 15);
        $pdf->Cell(0, 10, $total, 0, 1);
    }
    function secondPage($pdf, $data, $sport,$sem)
    {
        $pdf->SetMargins(10, 5, 10);
        $pdf->SetAutoPageBreak(false, 5.4);
        $pdf->AddPage('L');
        $pdf->SetFont('Arial', 'B', 12);

        $pdf->Cell(0, 10, 'Semaine '.$sem, 0, 0, 'L');
        $pdf->Cell(0, 10, $data['start'].' a '.$data['end'], 0, 1, 'R');
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
        $totd = [0, 0, 0, 0];
        for ($i = 0; $i < 7; $i++) {
            $pdf->Cell(17, 20, $days[$i], 1);
            $totr = 0;
            for ($j = 0; $j < 4; $j++) {
                $pdf->SetFont('Arial', '', 9);
                $current_y = $pdf->GetY();
                $current_x = $pdf->GetX();
                $cell_width = 44;
                $pdf->MultiCell($cell_width, 6, $data['data'][$i][$j][0], 0, false);
                $pdf->SetXY($current_x + $cell_width, $current_y);
                $pdf->SetFont('Arial', 'B', 9);
                $pdf->Cell(16, 20, $data['data'][$i][$j][1], 1);
                $totr += $data['data'][$i][$j][1];
                $totd[$j] += $data['data'][$i][$j][1];
            }
            $pdf->Cell(20, 20, $totr, 1);
            $pdf->Ln();
        }

        // Table row for Total
        $tot = 0;
        $pdf->Cell(17, 7, 'Total', 1);
        for ($i = 0; $i < 4; $i++) {
            $pdf->Cell(44, 7, '', 1);
            $pdf->Cell(16, 7, $totd[$i], 1);
            $tot += $totd[$i];
        }
        $pdf->Cell(20, 7, $tot, 1);


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
        for ($i = 0; $i < 7; $i++) {
            $pdf->Cell(39.5, 7, $sport[$i], 1);
        }
    }
}
