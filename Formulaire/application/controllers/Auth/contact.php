<?php

class contact extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->helper('url');
        $this->load->library('email');
    }
    public function index(){
        $this->load->view('exemple/sendemail');
    }
    #public function postemail(){

    #    $data = $this->input->post();
    #    print_r($data);
    #}
    public function send()
    {
        /* configuration smtp setting*/ 
        $to=$this->input->post('email');
        $subject=$this->input->post('subject');
        $message=$this->input->post('message');
        $from='ajotrans1@gmail.com';
        $emailcontent='Bonjours tous le monde';
        /*this is protocol wich our email transfer*/
        $config['protocol']='smtp';
        /*host of smtp*/
        $config['stmp_host']='ssl://smtp.gmail.com';
        /*port number of smtp host*/
        $config['stmp_port']='465';

        $config['stmp_timeout']='7';
        #$config['stmp_timeout']='60';

        $config['stmp_user']='ajotrans1@gmail.com';
        $config['stmp_pass']='bouarfa123';

        $config['charset']='utf-8';
        $config['newline']="\r\n";
        $config['mailtype']='html';
        $config['validation']=TRUE;


        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
        if($this->email->send()){
            echo "Email sent successful";
        }
        else{
            echo $this->email->print_debugger();
        }



        $this->session->set_flashdata('msg',"Mail has been sent successful");
        $this->session->set_flashdata('msg_class','alert-success');
        return redirect('sendemail');
















    }
}


?>