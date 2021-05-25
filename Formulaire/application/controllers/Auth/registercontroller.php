<?php
class registercontroller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('usermodel1');
    }
    public function index(){
        $this->load->view('register1');

    }
    public function register(){
        $this->form_validation->set_rules('username','Username','trim|required|alpha');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[connexion.email]');
        $this->form_validation->set_rules('password','Password','trim|required|md5');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|md5');
        $this->form_validation->set_rules('phone','Téléphone','required|max_length[12]|numeric');
        if($this->form_validation->run() == FALSE){
            //failed
            $this->index();
        }
        else{
               #echo "i m here";
               $data=array(
                   'username'=>$this->input->post('username'),
                   'email'=>$this->input->post('email'),
                   'password'=>md5($this->input->post('password')),
                   'gender'=>$this->input->post('gender'),
                   'phone'=>$this->input->post('phone')
               );
               $register_user= new usermodel1;
               $checking=$register_user->registeruser($data);
               if($checking){
                   $this->session->set_flashdata('status','registered successfuly.! go to login');
                   redirect(base_url('login'));
               }
               else{
                $this->session->set_flashdata('status','registered not successfuly.! ');
                redirect(base_url('register'));

               }


        }
    }
}

?>