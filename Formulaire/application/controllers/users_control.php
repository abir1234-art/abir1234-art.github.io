<?php
class users_control extends CI_Controller{
    public function index(){
        $this->load->model('create_model');
        #$users=$this->create_model->getall();
        #$data=array();
        #$data['clients']=$users;
        #$this->load->view('list',$data);
        $users= $this->create_model->getall();
        $data=array();
        $data['users']=$users;
        #$data['records'] = $this->create_model->getall();
        $this->load->view("list",$data);

    }
    public function create(){
        $this->load->model('create_model');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nom','Nom','required|alpha');
        $this->form_validation->set_rules('prenom','Prenom','required|alpha');
        $this->form_validation->set_rules('mail','Mail','required');
        $this->form_validation->set_rules('telephone','Téléphone','required');
        $this->form_validation->set_rules('adresse','Adresse','required');
        $this->form_validation->set_rules('ville','Ville','required');
        $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
        if($this->form_validation->run() ==  False){
          
        
        
                $this->load->view('create1');

        }
        else{

            $formarray = array();
            $formarray['nom']= $this->input->post('nom');
            $formarray['prenom']= $this->input->post('prenom');
            $formarray['mail']= $this->input->post('mail');
            $formarray['telephone']= $this->input->post('telephone');
            $formarray['adresse']= $this->input->post('adresse');
            $formarray['ville']= $this->input->post('ville');
            $this->create_model->create($formarray);
            $this->session->set_flashdata('success','record added successfuly');
            redirect(base_url().'users_control/index');

        }

    }
    public function edit_test($userid){
        $this->load->model('create_model');
        $user=$this->create_model->getuser($userid);
        $data=array();
        $data['user']=$user;
        $this->form_validation->set_rules('nom','Nom','required|alpha');
        $this->form_validation->set_rules('prenom','Prenom','required|alpha');
        $this->form_validation->set_rules('mail','Mail','required|valid_email');
        $this->form_validation->set_rules('telephone','Téléphone','required');
        $this->form_validation->set_rules('adresse','Adresse','required');
        $this->form_validation->set_rules('ville','Ville','required');
        if($this->form_validation->run() ==  False){

            $this->load->view('edit_file',$data);
        }
        else{
            //update user record
            $formarray=array();
            $formarray['nom']=$this->input->post('nom');
            $formarray['prenom']=$this->input->post('prenom');
            $formarray['mail']=$this->input->post('mail');
            $formarray['telephone']=$this->input->post('telephone');
            $formarray['adresse']=$this->input->post('adresse');
            $formarray['ville']=$this->input->post('ville');
            $this->create_model->updateuser($userid,$formarray);
            $this->session->set_flashdata('success','record update successfuly');
            #redirect('control/modifier');
            redirect(base_url().'users_control/index');

            
        }


    }
    public function delete($userid){
        $this->load->model('create_model');
        $user=$this->create_model->getuser($userid);
        if(empty($user)){
             $this->session->set_flashdata('faileur','record not found in database');
             redirect(base_url().'users_control/index');      
        }
        $this->create_model->deleteuser($userid);
        $this->session->set_flashdata('success','record deleted successfuly');
             redirect(base_url().'users_control/index'); 

    }
}


?>