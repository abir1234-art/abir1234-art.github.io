<?php
class email extends CI_Controller{
    public function __construct(){
        parent::__construct();
        //loading the email library
        $this->load->library('email');


    }
    public function index(){
        /*
       //configure the smtp setting
       $config['protocol']='mail';
       $config['smtp_host']='ssl:\\smtp.googlemail.com';
       $config['smtp_port']='465';
       #$config['smtp_timeout']='5';
       $config['smtp_user']='ajotrans1@gmail.com';
       $config['smtp_pass']='bouarfa123';
       $config['charset']='utf-8';
       $config['newline']="\r\n";
       $config['mailtype']='text';
       $config['validation']='TRUE';
        //initialize the configuration of smtp setting
       $this->email->initialize($config);
       */

        $config = Array(
           #'protocol' => 'smtp',
           'protocol' => 'smtp',
           #'smtp_host' => 'ssl://smtp.googlemail.com',
           'smtp_host' => 'ssl://smtp.gmail.com',
           #'smtp_port' => 465,
           'smtp_port' => 587,
           'smtp_user' => 'ajotrans1@gmail.com',
           'smtp_pass' => 'bouarfa123',
           'mailtype'  => 'html',
           'charset'   => 'iso-8859-1'
        );

        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('ajotrans1@gmail.com');

        //set the email from,to,subject and message
        $this->email->from('ajotrans1@gmail.com','Admin');
        $this->email->to('ajotrans1@gmail.com');
        $this->email->subject('bonjour abir bouarfa');
        $this->email->message('hello this is the email');
        //final etape sending email
        if($this->email->send()){
           echo "Email send successfuly";
        }
        else{
            echo $this->email->print_debugger();
        }



    }
}

?>