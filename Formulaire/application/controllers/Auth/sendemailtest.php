<?php

class sendemailtest extends CI_Controller{
    /*
    public function index(){
       # $this->load->view('sendtestemail');
       $this->send();
    }

    public function send(){

        $config = Array(
            #'protocol'  =>'smtp', // 'mail', 'sendmail' ou 'smtp'
            #'smtp_host' => 'ssl://smtp.googleemail.com', 
            #'smtp_port' => 465,
            #'smtp_user' => 'ajotrans1@gmail.com ',
            #'smtp_pass' => 'bouarfa123',
            #'smtp_crypto' => 'ssl', // peut être 'ssl' ou 'tls' par exemple
            #'mailtype' => 'text', // en clair 'text' mails ou 'html'
            #'smtp_timeout' => '4', // en secondes
            #'charset' => 'iso-8859-1',
            #'wordwrap' => TRUE
            $config [ 'protocol' ] = 'smtp',
            $config [ 'smtp_host' ] = 'ssl://smtp.googleemail.com',
            $config [ 'smtp_user' ] = 'ajotrans1@gmail.com',
            $config [ 'smtp_pass' ] = 'bouarfa123',
            $config [ 'smtp_port' ] = 465
        );
        $message="salam 3alikom";
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('ajotrans1@gmail.com');
        $this->email->to('ajotrans1@gmail.com');
        $this->email->subject('subject:send mail');
        $this->email->message($message);

        if($this->email->send()){
            echo 'email sent';
        }
        else{
            show_error($this->email->print_debugger());

        }
    }
}*/
     function __construct(){ 
         parent :: __construct();
       #$this->load->library ( 'session' );
       #$this->load->helper ( 'formulaire' );
       $this->load->library('email');
       #$this->load->library('email');
     
    #index de     fonction publique ( ) { 
    #$ this-> load-> helper ( 'formulaire' ) ;
       #$this->load->view( 'sendtestemail' );
       }
      public function send1(){ 
        #$from_email = "ajotrans1@gmail" ;
        #$to_email=$this-> input-> post ('email');
        /*
        $config = tableau ( ) ;
        $config [ 'protocol' ] = 'smtp';
        $config [ 'smtp_host' ] = 'ssl://smtp.googleemail.com';
        $config [ 'smtp_user' ] = 'ajotrans1@gmail.com';
        $config [ 'smtp_pass' ] = 'bouarfa123';
        $config [ 'smtp_port' ] = 25 ;
        $this->email->initialize($config) ;
        $this->email->set_newline("\ r \ n") ;
      // Charger la bibliothèque d'e-mails
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject( 'Send Email Codeigniter');
        $this->email->message( 'mail envoyé à aide de la bibliothèque codeigniter');
       //Envoyer un mail
         if ($this-> email->send())
             $this->session->set_flashdata("email_sent" , "Email de félicitations envoyé avec succès.");

             $this->session->set_flashdata( "email_sent" , "Vous avez rencontré une erreur" );
             $this->load->view('sendtestemail');
}
}
*/
        $config = Array(
             'protocol'  =>'mail', // 'mail', 'sendmail' ou 'smtp'
             'smtp_host' => 'ssl://smtp.gmail.com', 
             'smtp_port' => 465,
             'smtp_user' => 'ajotrans1@gmail.com ',
             'smtp_pass' => 'bouarfa123',
             'smtp_crypto' => '', // peut être 'ssl' ou 'tls' par exemple
             'mailtype' => 'text', // en clair 'text' mails ou 'html'
             'smtp_timeout' => '5', // en secondes
             'charset' => 'iso-8859-1',
             'wordwrap' => TRUE
        );
        /*
        $this->load->library('email',$config);
        $this->email->from('ajotrans1@gmail.com','admin');
        $this->email->to('ajotrans1@gmail.com');
        $this->email->subject('Email test');
        $this->email->message('Testing the email class');
        $this->email->set_newline("\r\n");

        $result=$this->email->send();
        $this->email->print_debugger();
        */
        $email=$this->input->post('email');
        $subject=$this->input->post('subject');
        $message=$this->input->post('message');
        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($email);
        $this->email->to('ajotrans1@gmail.com');
        #$this->email->set_newline("\r\n");
        $this->email->subject($subject);
        $this->email->message($message);
        if($this->email->send())
        {
            echo "email send successful";
        }
        else{
            echo "error";
        }

    }
}      

?>