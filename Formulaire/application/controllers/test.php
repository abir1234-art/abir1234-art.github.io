<?php

class test extends CI_Controller{

    public function index(){
        $data['content']="login_view.php";
        $this->load->view('first_view',$data);
    }
}


?>