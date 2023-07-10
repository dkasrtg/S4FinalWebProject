<?php 

    $this->load->view('client/template/Header');

    $this->load->view('client/template/Navbar');

    $this->load->view($page,$data);

    $this->load->view('client/template/Footer');
?>