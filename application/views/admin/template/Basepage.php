<?php 

    $this->load->view('admin/template/header');

    $this->load->view('admin/template/navbar');

    $this->load->view($page,$data);

    $this->load->view('admin/template/Footer');
?>