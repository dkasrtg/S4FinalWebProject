<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'third_party\fpdf185\fpdf.php';

class Propositionpdf extends FPDF
{
    public function __construct()
    {
        parent::__construct();
    }
        
}
?>
