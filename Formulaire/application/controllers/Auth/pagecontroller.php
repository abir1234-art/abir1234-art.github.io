<?php

class pagecontroller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($_SESSION['user_logged'] == FALSE){
            $this->session->set_flashdata("error","Please login first to view  this page !!!");
            redirect("auto/login");


        }
        $this->load->helper('form');
    }
    public function userpage(){
        $this->load->view('exemple/userpage');
        /*
        if($_SESSION['user_logged'] == FALSE){
            $this->session->set_flashdata("error","Please login first to view  this page !!!");
            redirect("auto/login");


        }*/
        #$this->load->view('exemple/sendemail');
    }
    #public function index(){
        #$this->load->view('exemple/sendemail');
    #}
    #public function postemail(){

        #$data = $this->input->post();
        #print_r($data);
    #}
}

?>