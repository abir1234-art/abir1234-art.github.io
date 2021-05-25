<?php


class auto extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        #$this->load->model('authentification');
        $this->load->library('email');
        $this->load->helper('url');
        #$this->load->model('loginmodel');
    }
    public function logout(){
        unset($_SESSION);
        session_destroy();
        redirect('auto/login','refresh');
        

    }
    public function index(){
        $this->load->view('login');
       
    }
    public function login(){
        $this->load->view('login');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="error>','</div>');
        

        if($this->form_validation->run() == TRUE){
            
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            

            //check user in database
            $this->db->select('*');
            $this->db->from('connexion');
            $this->db->where(array('username' => $username ,'password'=> $password));
            $query = $this->db->get();
            #$result=$this->loginmodel->check_user($username,$password);

            
        
            /*
            if($this->form_validation->run() == FALSE){
                $this->index();
        }
        */
        /*
        else
        {
             #echo 'i am abir';
            $data = [
               'username'    => $this->input->post('username'),
               'password' => $this->input->post('password')
            ];
            $user= new authentification;
            $result=$user->loginUser($data);
            if($result!= FALSE)
            {
               #echo $result->first_name . $result->last_name;
               $auth_userdetails =[
                 
                 'username' =>$result->username,
                 'password' =>$result->password


                ];
              $this->session->set_userdata('authentification','1');
              $this->session->set_userdata('auth_user',$auth_userdetails);
              $this->session->set_flashdata('status','You are Loggedin successfuly');
              #redirect(base_url('userpage'));
              redirect("Auth/pagecontroller/userpage","refresh");
            }
            else{
               $this->session->set_flashdata('status','invalid email id or password');
               redirect(base_url('auto/login'));

            }*/
            
            $conn= $query->row();
            //if user exists
            /*il faut  réglé ce probleme de mot de passe incorrect il affiche moi un message sur la ligne 88*/
            #$_SESSION['user_loged']=TRUE;
			#$_SESSION['username']=$conn->username;
			#$_SESSION['email']=$conn->email;
            
            if($conn){
                if($conn->type_user == 'admin'){
                    $this->session->set_flashdata("success","You are logged in");
                    $_SESSION['user_logged'] = TRUE;

                    $_SESSION['username'] = $conn->username;
                    redirect(base_url('adminpage'));

                }else{
                     $this->session->set_flashdata("success","You are logged in");
                     $_SESSION['user_logged'] = TRUE;

                     $_SESSION['username'] = $conn->username;
                      redirect(base_url('userpage1'));


		            }
        }
               
                /*
                $this->session->set_flashdata("success","You are logged in");
                //set session variable
                $_SESSION['user_logged']=TRUE;
                $_SESSION['username']=$conn->username;
                //redirect to profile page
                #redirect("Auth/pagecontroller/userpage","refresh");
                #redirect(base_url('userpage'));
                */
            
        else{
                    $this->session->set_flashdata("error","invalid email id or password");
                    redirect("auto/login","refresh");

            }
            
            
       
        } 
    #$this->load->view('login');
    }
    public function register(){

        if(isset($_POST['register'])){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('phone','Phone','required|max_length[12]|numeric');
            //if form validation is true
             if($this->form_validation->run() == TRUE){
                
               echo "form validated";
               //add user in database
               $data=Array(
                   'username'=>$_POST['username'],
                   'email'=>$_POST['email'],
                   'password'=>md5($_POST['password']),
                   #'password'=>md5($_POST['password']),//pour crypté le password
                   'gender'=>$_POST['gender'],
                   'created_date'=>date('y-m-d'),
                   'phone'=>$_POST['phone']

               );
               $this->db->insert('connexion',$data);
               #$this->session->set_flashdata("success","Your account has been register You can login now");
               #redirect("auto/register","refersh");
               $this->load->library('email');
               
               //Get the form data

               $from_email ='ajotrans1@gmail.com';
               $subject = "confirmation";
               $message = "Bienvenue";

               //Web master email
               $to_email = $this->input->post('email'); //Webmaster email, who receive mails

               //Mail settings
               $config['protocol'] = 'smtp';
               $config['smtp_host'] = 'ssl://smtp.gmail.com';
               $config['smtp_port'] = '465';
               $config['smtp_user'] = 'ajotrans1@gmail.com'; // Your email address
               $config['smtp_pass'] = 'bouarfa123'; // Your email account password
               $config['mailtype'] = 'html'; // or 'text'
               $config['charset'] = 'iso-8859-1';
               $config['wordwrap'] = TRUE; //No quotes required
               $config['newline'] = "\r\n"; //Double quotes required

               $this->email->initialize($config);                        

               //Send mail with data
               $this->email->from($from_email, $name);
               $this->email->to($to_email);
               $this->email->subject($subject);
               $this->email->message($message);
               //envoye un document
               $this->email->attach('C:\xampp1\htdocs\Formulaire\document1.txt');
        
               if ($this->email->send())
               {
                #$this->session->set_flashdata("success","Your account has been register You can login now. and your are successful sent mail");
                $this->session->set_flashdata("success","vous étes s'inscris avec succés,Vérifiez votre email");
                redirect("auto/register","refersh");   
                #$this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');
                   
               }else {
                        $this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
                        #$this->load->view('exemple/sendemail');
                        redirect(base_url('register'));
        }
                
    }
}

      
        if(isset($_POST['login'])){
            redirect("auto/login", "refresh");
        }
        $this->load->view('register');
        
    }
    
    public function contact()
{
    
    $this->load->library('email');
    $this->load->library('form_validation');

    //Set form validation
    $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[16]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[6]|max_length[60]');
    $this->form_validation->set_rules('message', 'Message', 'trim|required');

    //Run form validation
    if ($this->form_validation->run() === FALSE)
    {
        
        $this->load->view('exemple/sendemail');
    } else {

        //Get the form data
        $name='Ajo trans';
        $from_email = 'ajotrans1@gmail.com';
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        //Web master email
        $to_email = $this->input->post('email'); //Webmaster email, who receive mails

        //Mail settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'ajotrans1@gmail.com'; // Your email address
        $config['smtp_pass'] = 'bouarfa123'; // Your email account password
        $config['mailtype'] = 'html'; // or 'text'
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE; //No quotes required
        $config['newline'] = "\r\n"; //Double quotes required

        $this->email->initialize($config);                        

        //Send mail with data
        $this->email->from($from_email, $name);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        
        if ($this->email->send())
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');

            redirect(base_url('sendemail'));
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
            $this->load->view('exemple/sendemail');
        }

    }

}
                         

    public function MPO(){  //  mot de passe oublier

        if(isset($_POST['mpo'])){
        
               
                    $this->load->library('email');
                       
                       //Get the form data
        
                       $from_email = 'ajotrans1@gmail.com';
                       $subject = "mot de passe oublier";
                       $message = " Bonjour cliquez sur ce lien : http://localhost:7882/Formulaire/auto/mpor pour puisse r&eacute;activer votre compte et récuperer votre mot de passe ";
                       //Web master email
                       $to_email = $this->input->post('email');  //who receive mails
        
                       //Mail settings
                       $config['protocol'] = 'smtp';
                       $config['smtp_host'] = 'ssl://smtp.gmail.com';
                       $config['smtp_port'] = '465';
                       $config['smtp_user'] = 'ajotrans1@gmail.com'; // Your email address
                       $config['smtp_pass'] = 'bouarfa123'; // Your email account password
                       $config['mailtype'] = 'html'; // or 'text'
                       $config['charset'] = 'iso-8859-1';
                       $config['wordwrap'] = TRUE; //No quotes required
                       $config['newline'] = "\r\n"; //Double quotes required
        
                       $this->email->initialize($config);                        
        
                       //Send mail with data
                       $this->email->from($from_email);
                       $this->email->to($to_email);
                       $this->email->subject($subject);
                       $this->email->message($message);
               
                       if ($this->email->send())
                       {
                        $this->session->set_flashdata("success","Reset Password link sent to your registred email.Please verify");
                        redirect("auto/mpo", "refresh");  
                       
                           
                       }else {
                                $this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
                                redirect(base_url('mpo'));
                }
                   
        }
        
        $this->load->view('recuperer_password');
        }
        
        
    /*
    public function nouveau_password(){  // MPO : mot de passe oublier


        if(isset($_POST['nouveau_password'])){
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('password2', 'password2', 'required|matches[password]');
        if($this->form_validation->run() == TRUE){

            $email = $this->input->post('email');

            $this->db->select('*');
            $this->db->from('connexion');
            $this->db->where(array('email'=>$email));
            $query = $this->db->get();
            $conn = $query->row();

            if($conn){


                $data = array(

                    'password'=>md5($_POST['password'])
           
                );


                $this->db->where('email', $email);
                $this->db->update('connexion', $data);


                $this->session->set_flashdata("success", "mot de passe changé");
                redirect(base_url('nouveau_password'));
     
            }else{
            $this->session->set_flashdata("error", "email n'éxiste pas");

            }

    }

    }
    $this->load->view('nouveau_password');
}*/
/*
    public function nouveau_password(){  // MPO : mot de passe oublier


        if(isset($_POST['nouveau_password'])){

            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('password2', 'password2', 'required|matches[password]');



            if($this->form_validation->run() == TRUE){

                $email = $this->input->post('email');

                $this->db->select('*');
                $this->db->from('connexion');
                $this->db->where(array('email'=>$email));
                $query = $this->db->get();

                $connexion = $query->row();

                if($connexion){


                        $data = array(

                        #'password'=>md5($_POST['password']),
                        'password'=>md5($_POST['password']),
       
                        );


                        $this->db->where('email', $email);
                        $this->db->update('connexion', $data);


                        $this->session->set_flashdata("success", "password is change");
 
                }
                else{
                        $this->session->set_flashdata("error", "invalid email");

                }

            }

        }
        $this->load->view('nouveau_password');
    }


*/
    public function MPOR(){  // MPO : mot de passe oublier


        if(isset($_POST['mpor'])){

            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('password2', 'password2', 'required|matches[password]');



            if($this->form_validation->run() == TRUE){

                $email = $this->input->post('email');

                $this->db->select('*');
                $this->db->from('connexion');
                $this->db->where(array('email'=>$email));
                $query = $this->db->get();

                $user_form = $query->row();

                if($user_form){


                    $data = array(

                     'password'=>md5($_POST['password']),
       
                    );


                    $this->db->where('email', $email);
                    $this->db->update('connexion', $data);


                    $this->session->set_flashdata("success", "mot de passe changé");
 
                }else{
                        $this->session->set_flashdata("error", "email n'éxiste pas");

                }

            }

        }
        $this->load->view('nouveau_password');
    }
  
   
    
    
    
   
    /*
    public function postemail(){
        $this->load->view('exemple/sendemail_1');
        $data=$this->input->post();
        $this->load->library('session');
        $this->load->library('email');
        $config= array();
        $config['protocol']='smtp';
        $config['smtp_host']='smtp.gmail.com';
        $config['smtp_user']='ajotrans1@gmail.com';
        $config['smtp_pass']='bouarfa123';
        $config['smtp_port']=587;
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($data['email']);
        $this->email->to('ajotrans1@gmail.com');
        $this->email->subject($data['subject']);
        $this->email->message($data['message']);
        if($this->email->send()){
            $this->session->flashdata('success','Email sent successfuly');
            redirect(base_url('exemple/sendemail_1'));
        }
        else{
            $this->session->flashdata('error','Email  not sent');   
        }




    }
    public function table(){
        $this->load->view('table');
    }*/
    }

?>