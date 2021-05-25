<?php

class logincontroller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('UserModel');
    }
    public function index()
    {
        $this->load->view('exemple/index');
    }
    public function login(){
        $this->form_validation->set_rules('email_id','Email Adresse','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run() == FALSE)
        {  
            $this->index();
        
        }
        else
        {
            #echo 'i am abir';
           $data = [
               'email'    => $this->input->post('email_id'),
               'password' => $this->input->post('password')
           ];
           $user= new UserModel;
           $result=$user->loginUser($data);
           if($result!= FALSE)
           {
               #echo $result->first_name . $result->last_name;
             $auth_userdetails =[
                 'first_name' => $result->first_name,
                 'last_name'  => $result->last_name,
                 'email' =>$result->email,

             ];
             $this->session->set_userdata('authenticated','1');
             $this->session->set_userdata('auth_user',$auth_userdetails);
             $this->session->set_flashdata('status','You are Loggedin successfuly');
             redirect(base_url('userpage'));
           }
           else{
               $this->session->set_flashdata('status','invalid email id or password');
               redirect(base_url('index'));

           }
        }
    }
}
?>