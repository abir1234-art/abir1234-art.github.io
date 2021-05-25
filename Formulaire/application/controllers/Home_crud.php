<?php
class Home_crud extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->helper('url');
    
    }
    public function index(){
        $this->load->library('form_validation');
        $this->load->model('crud_model');
        $records=$this->crud_model->getrecords();
        $this->load->view('home_test',['records'=>$records]);
        
    
    }
    public function create(){
        $this->load->view('create');

    }
    /*
    public function edit(){
         
        
           
           $this->load->library('form_validation');
           $this->form_validation->set_rules('Nom','Nom','required');
           $this->form_validation->set_rules('Prenom','Prenom','required');
           $this->form_validation->set_rules('mail','E-mail','required|is_unique[users.email]');
           $this->form_validation->set_rules('telephone','Téléphone','required');
           $this->form_validation->set_rules('adresse','Adresse','required');
           $this->form_validation->set_rules('ville','Ville','required');
           #$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
           $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
           if($this->form_validation->run()){
                  echo 'successfuly';
            /*
            $data=$this->input->post();
            $this->load->model('crud_model');
            if($this->crud_model->saverecords($data)){
                 $this->session->set_flashdata('reponse','Record save Successfuly');

            }
        
            else{
                 $this->session->set_flashdata('reponse','Failed saved record!!!');
            }
            return redirect('control/home');*/
            #}
            /*
           else{
                   $this->load->view('create');
            }
        


    }*/
   
    
    public function edit()
        {
           
            $this->load->helper('array');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nom','Nom','required|alpha');
            $this->form_validation->set_rules('prenom','Prenom','required|alpha');
            $this->form_validation->set_rules('mail','Mail','required|is_unique[client.mail]');
            $this->form_validation->set_rules('telephone','Téléphone','required');
            $this->form_validation->set_rules('adresse','Adresse','required');
            $this->form_validation->set_rules('ville','Ville','required');
            $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
            if($this->form_validation->run())
            {
                #echo "Validation successful";
                
                
                
                $data=$this->input->post();
                $this->load->model('crud_model');
                if($this->crud_model->saverecords($data)){
                    $this->session->set_flashdata('reponse','Record save Successfuly');

                }
                else{

                    $this->session->set_flashdata('reponse','Failed saved record!!!');

                }
                return redirect('control/home');
            }
            else
            {
                //echo validation_errors();
                $this->load->view('create');
            }
            
           
           

      
        }

        
        
    public function update($record_id){
       # echo $record_id;
       $this->load->model('crud_model');
       $record=$this->crud_model->getallrecords($record_id);
       $this->load->view('update',['record'=>$record]);


    }
    public function update1($record_id){


            $this->load->helper('array');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nom','Nom','required|alpha');
            $this->form_validation->set_rules('prenom','Prenom','required|alpha');
            $this->form_validation->set_rules('mail','Mail','required|is_unique[client.mail]');
            $this->form_validation->set_rules('telephone','Téléphone','required');
            $this->form_validation->set_rules('adresse','Adresse','required');
            $this->form_validation->set_rules('ville','Ville','required');
            $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
            if($this->form_validation->run())
            {
                
                #echo "Validation successful";
                $data=$this->input->post();
                $this->load->model('crud_model');
                if($this->crud_model->updaterecords($record_id,$data)){
                    $this->session->set_flashdata('reponse','Record update Successfuly');

                }
                else{

                    $this->session->set_flashdata('reponse','Failed update record!!!');

                }
                return redirect('control/home');
            }
            else
            {
                //echo validation_errors();
                $this->load->view('update');
            }
        }
        public function delete($record_id){
            $this->load->model('crud_model');
            if($this->crud_model->deleterecords($record_id)){
                $this->session->set_flashdata('reponse','Record Delete Successfuly');

            }
            #echo $record_id;
            else{
                #$this->load->view('home_test');
                $this->session->set_flashdata('reponse','Failed to delete record!!!');
            }
            return redirect('control/home');
        }


    


}



?>