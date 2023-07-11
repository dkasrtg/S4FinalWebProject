<?php

    $this->load->view('client/template/Header');

    $this->load->view('client/'.$page,$data);

    $this->load->view('client/template/Footer');
?>