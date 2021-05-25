<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
    public function index() {
        #$data["title"] = "Page d'accueil";
        #$this->load->view('templates/header1');
        #$this ->load->view ('templates/index1');
        #$this->load->view('templates/footer1');
        #$this->load->view('templates/footer',$data);
        $this->load->view('identifier');
    }
}