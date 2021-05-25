<?php

class authenticated extends CI_Model{

    public function __Construct(){
        parent::__construct();
        if($this->session->has_userdata('authenticated'))
        {
            if($this->session->userdata('authenticated')=='1'){
                echo "you are user";
            }

        }
        else{
            $this->session->set_flashdata('status','First Login');
            redirect(base_url('login'));
        }
    }
}

?>