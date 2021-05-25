<?php
class control extends CI_Controller{

    public function profile_admin(){
        #$this->load->view('profile_admin');
        $this->load->view('adminpage');
    }
    public function profile_user(){
        #$this->load->view('profile_user');
        $this->load->view('exemple/userpage1');
    }
    public function home(){
        #$this->load->view('profile_user');
        $this->load->view('home_test');
        #$this->load->view('list');
    }
    public function ajouter(){
        $this->load->view('create1');
    }
    public function modifier(){
        $this->load->view('list');
    }
}

?>