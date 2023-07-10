<?php 

    $this->load->view('admin/template/header');

    $this->load->view('admin/template/menu');

    $this->load->view('admin/template/navbar');

    $this->load->view('admin/pages/'.$page,$data);

    $this->load->view('admin/template/Footer');
?>