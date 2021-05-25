<?php
class logincontroller1 extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('usermodel1');
    }
    public function index(){
        $this->load->view('login1');
    }
    public function login1(){
        $this->form_validation->set_rules('email_id','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run() == FALSE){
            //failed
            $this->index();
        }
        else{
            $data=[
                'email'=>$this->input->post('email_id'),
                'password'=>$this->input->post('password')
            ];
            $user=new usermodel1;
            $result=$user->loginuser($data);
            if($result!=FALSE){
                
               # $auth_userdetails=[


                #];

            }
            else{
                $this->session->set_flashdata('status','invalid email or password');
                redirect(base_url('login1'));
            }
        }
    }
}
?>