<?php


class auto extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        #$this->load->model('authentification');
        $this->load->library('email');
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->model('create_model');
    }
    public function logout(){
        unset($_SESSION);
        session_destroy();
        redirect('auto/login','refresh');
        

    }
    public function index(){
        $this->load->view('login');
       
    }
    public function admin(){
        #$this->load->view('profile_admin');
        #$this->load->model('create_model');
        
        $data = Array(
             'clients' => $this->create_model->get_row_query('select count(*) as t from clients'),
             'produits' => $this->create_model->get_row_query('select count(*) as t from produits'),
             'devis' => $this->create_model->get_row_query('select count(*) as t from devis')
        ); 
      
        #$data['clients'] = $this->create_model->get_row_query('select count(*) as t from clients');
        #$data['produits'] = $this->create_model->get_row_query('select count(*) as t from produits');
        #$this->load->view('adminpage',$data);
        $this->load->view('adminpage',$data);
    }
    public function user(){
        #$this->load->view('profile_user');
        $this->load->view('exemple/userpage1');
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
            $conn= $query->row();
            //if user exists
            /*il faut  réglé ce probleme de mot de passe incorrect il affiche moi un message sur la ligne 88*/
            #$_SESSION['user_loged']=TRUE;
			#$_SESSION['username']=$conn->username;
			#$_SESSION['email']=$conn->email;
            
            if($conn){
                
                
                if($conn->type_user == 'admin'){
                    $this->load->model('create_model');
                    $this->session->set_flashdata("success","Bienvenu dans la page administrateur");
                    $this->load->helper('url');
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['username'] = $conn->username;
                    #redirect("auto/profile_admin");  
                    #redirect(base_url('adminpage'));
                   
                    #redirect('adminpage');
                    redirect("auto/admin","refresh");
                

                }else{
                    if($conn->status==1){
                        $this->session->set_flashdata("success","Bienvenu dans la page utilisateur");
                        $this->load->helper('url');
                        $_SESSION['user_logged'] = TRUE;
                        #$this->load->view('exemple/userpage1');
                        $_SESSION['username'] = $conn->username;
                        #redirect(base_url('userpage1'));
                        
                        #redirect('userpage1');
                        redirect("auto/user","refresh");
                    }
                    else{
                        $this->session->set_flashdata("error","Vous n'avez pas le doit d'accéder au page d'acceuil");
                        redirect("auto/login","refresh");

                    }
                    /*
                    $this->session->set_flashdata("success","You are logged in");
                    $this->load->helper('url');
                    $_SESSION['user_logged'] = TRUE;
                    #$this->load->view('exemple/userpage1');
                    $_SESSION['username'] = $conn->username;
                    #redirect(base_url('userpage1'));
                    redirect('userpage1');
                     */


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
                    $this->session->set_flashdata("error","email ou le mot de passe incorrect");
                    redirect("auto/login","refresh");

            }
            
            
       
        } 
    #$this->load->view('login');
    }
    public function view_utilisateurs($offset=0){
        $this->load->model('create_model');
        $this->load->library('pagination');
        $config['base_url']=base_url('auto/view_utilisateurs');
        $config['per_page']=10;
        $config['reuse_query_string']=TRUE;
        $config['total_rows']=$this->create_model->getTotalRowsutilisateur();
        $config['next_link']='Next';
        $config['prev_link']='Previous';
        $config['full_tag_open']="<ul class='pagination'>";
        $config['full_tag_close']='</ul>';
        $config['next_tag_open']='<li class="page-item disabled">';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li class="page-item">';
        $config['prev_tag_close']='</li>';
        $config['num_tag_open']='<li class="page-item">';
        $config['num_tag_close']='</li>';
        $config['cur_tag_open']='<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close']='<span class="sr-only">(current)</span></a></li>';
        $config['attributes']=array('class'=>'page-link');
        $this->pagination->initialize($config);
        $this->load->model('create_model');
        $data['connexion']=$this->create_model->getallutilisateurs($config['per_page'],$offset);
        $this->load->view('list_utilisateur',$data);
        
               
        
    }
    public function update_status_utilisateur($user_id,$status){

	    $this->load->model('create_model');

	    //send id and status to the model to update the status
        $this->create_model->update_status_utilisateur($user_id,$status);
	    #if($this->create_model->update_status_utilisateur($user_id,$status)){
        if($status==1){
                $this->session->set_flashdata('error',' ce utilisateur est  désactiver ');
                   
        }
        else{
                $this->session->set_flashdata('success','ce utilisateur est  activer');
        

        }
        return redirect(base_url().'auto/view_utilisateurs');  

    }
    public function register(){

        if(isset($_POST['register'])){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('phone','Phone','required|max_length[12]|numeric');
            $this->form_validation->set_rules('type_user','Type_user','required');
            $this->form_validation->set_rules('status','Etat','required');
            $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
            //if form validation is true
             if($this->form_validation->run() == TRUE){
                
               #echo "form validated";
               //add user in database
               $data=Array(
                   'username'=>$_POST['username'],
                   'email'=>$_POST['email'],
                   'password'=>md5($_POST['password']),
                   #'password'=>md5($_POST['password']),//pour crypté le password
                   'gender'=>$_POST['gender'],
                   'created_date'=>date('y-m-d'),
                   'phone'=>$_POST['phone'],
                   'type_user'=>$_POST['type_user'],
                   'status'=>$_POST['status']


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
                $this->session->set_flashdata("success","utilisateur est ajouter avec success");
                #redirect("auto/register","refersh");   
                redirect("auto/view_utilisateurs","refersh");   
                #$this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');
                   
               }else {
                    
    
                        $this->session->set_flashdata('msg','<div class="alert alert-danger">probleme dajouter utilisateur</div>');
                        #$this->load->view('exemple/sendemail');
                        #redirect(base_url('register'));
                        #redirect("auto/register","refersh");  
                        redirect("auto/ajouter_utilisateur","refersh");  
        }
                
    }
}

      
        if(isset($_POST['login'])){
            redirect("auto/login", "refresh");
        }
        $this->load->view('ajouter_utilisateur');
        #$this->load->view('utilisateur');
        
    }
    public function edit_utilisateur($userid){
        $this->load->model('create_model');
        $data=array();
        $data['user']=$this->create_model->getusers1($userid);
        $data['details_utilisateur']=$this->create_model->genderutilisateur();
        $data['status_utilisateur']=$this->create_model->statusutilisateur();
        $data['type_utilisateur']=$this->create_model->typeutilisateur();
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        #$this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
        $this->form_validation->set_rules('gender','Genre','required');
        $this->form_validation->set_rules('phone','Phone','required|max_length[12]|numeric');
        $this->form_validation->set_rules('type_user','Type_user','required');
        $this->form_validation->set_rules('status','Etat','required');
        if($this->form_validation->run() ==  False){

            $this->load->view('edit_utilisateur',$data);
        }
       
        else{
           //update user record
           $formarray=array();
            #$formarray['ref_client']=$this->input->post('ref_client');
           $formarray['username']=$this->input->post('username');
           $formarray['email']=$this->input->post('email');
           $formarray['password']=$this->input->post('password');
           $formarray['gender']=$this->input->post('gender');
           $formarray['phone']=$this->input->post('phone');
           $formarray['type_user']=$this->input->post('type_user');
           $formarray['status']=$this->input->post('status');
           $this->create_model->updateusers($userid,$formarray);
           $this->session->set_flashdata('success','les données utilisateur est modifier ');
           #redirect('control/modifier');
           redirect(base_url().'auto/view_utilisateurs');

        
        }
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
        #$data_file=$this->upload_file();
        #$data_file= $this->input->post('file');
        //upload file
        $attachment_file = "";
        if (!empty($_FILES) && isset($_FILES["file"])) {

                $image_name = $_FILES["file"]['name'];

                $ext = pathinfo($image_name, PATHINFO_EXTENSION);

                $new_name = time() . '_' . $this->get_random_string();

                $config['file_name'] = $new_name . $ext;
                $config['upload_path'] = "./uploads/";
                $config['allowed_types'] = "*";

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {

                    $finfo = $this->upload->data();
                    $attachment_file = base_url() . './uploads/' . $finfo['file_name'];
                }else{

                       $error = $this->upload->display_errors();
                       $this->msg = $error;
                       $this->_sendResponse(5);
                }
        }

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
        #$this->load->library('upload');
        #$data_file=$this->upload_file();
        #$this->email->attach($data_file['full_path']);
        $this->email->attach($attachment_file);
        #$this->email->attach('C:\xampp1\htdocs\Formulaire\uploads\file.txt');
        
        
        if ($this->email->send())
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success">Merci de nous avoir envoyé ce mail, Nous y répondrons dans les meilleurs délais.</div>');

            redirect(base_url('sendemail'));
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger">Votre message na pas pu etre envoyé</div>');
            $this->load->view('exemple/sendemail');
        }
  

    }

}


   
    public function upload_file() 
	{
        $config ['upload_path'] = './uploads/';
        $config ['allowed_types'] ='gif|jpg|png';#|doc|docx|pdf';
        $config ['taille_max'] = 2000;
        $config ['largeur_max'] = 1500;
        $config ['hauteur_max'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) 
		{
              $error = array('error' => $this->upload->display_errors());

              $this->load->view('exemple/sendemail', $error);
        } 
		else
		{
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('exemple/sendemail', $data);
        }
    }
                         

    public function MPO(){  //  mot de passe oublier

        if(isset($_POST['mpo'])){
        
               
                    $this->load->library('email');
                       
                       //Get the form data
        
                       $from_email = 'ajotrans1@gmail.com';
                       $subject = "mot de passe oublier";
                       $message = " Ce mail fait suite à votre demande de changement de mot de passe ,Pour g&eacute;n&eacute;rer un nouveau mot de passe, veuillez cliquer sur le lien ci-dessous: : http://localhost:7882/Formulaire/auto/mpor pour puisse r&eacute;activer votre compte  ";
                       $message.="<br />";
                       $message.="Cordialement";
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
                        #$this->session->set_flashdata("success","Reset Password link sent to your registred email.Please verify");
                        $this->session->set_flashdata("success","Lien de réinitialisation du mot de passe envoyé à votre adresse e-mail enregistrée.Veuillez vérifier");
                        redirect("auto/mpo", "refresh");  
                       
                           
                       }else {
                                $this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
                                redirect(base_url('mpo'));
                }
                   
        }
        
        $this->load->view('recuperer_password');
        }
        
        
   

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
   /* public function  get_client(){
        $this->load->model('create_model');
		$new_id = $this->create_model->max_client()->result();
		if ($new_id > 0) {
				foreach ($new_id as $key) {
		 		 $auto_id = $key->ref_client ;		 		 
				}
		}		
		return $id = $this->create_model->get_id_client($auto_id,'CLT');		
	}*/
    public function garde(){
        #$data['clients']=$this->create_model->getallclients3(); 
        $this->load->view("page_admin");

    }
    public function index1($offset=0){
        $this->load->model('create_model');
        
        $this->load->library('pagination');
        $config['base_url']=base_url('auto/index1');
        $config['per_page']=2;
        $config['reuse_query_string']=TRUE;
        $config['total_rows']=$this->create_model->getTotalRows();
        $config['next_link']='Next';
        $config['prev_link']='Previous'; 
        $config['full_tag_open']="<ul class='pagination'>";
        $config['full_tag_close']='</ul>';
        $config['next_tag_open']='<li class="page-item disabled">';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li class="page-item">';
        $config['prev_tag_close']='</li>';
        $config['num_tag_open']='<li class="page-item">';
        $config['num_tag_close']='</li>';
        $config['cur_tag_open']='<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close']='<span class="sr-only">(current)</span></a></li>';
        $config['attributes']=array('class'=>'page-link');
        $this->pagination->initialize($config);
        $data['clients']=$this->create_model->getallclients($config['per_page'],$offset); 
        $this->load->view("list_client",$data);
    
    }

    public function keyword(){
        $key=$this->input->post('title');
        $data['users']=$this->create_model->research($key);
        $this->load->view('list_client',$data);

    }
    public function filter(){
        $filter=$this->input->post('filter');
        $field=$this->input->post('field');
        $search=$this->input->post('search');

        if(isset($filter)&& !empty($search)) {
                $this->load->model('create_model');
                $data['clients'] = $this->create_model->getclientsWhereLike($field,$search);
        }else{
                $this->load->model('create_model');
                $data['clients'] = $this->create_model->getall();
        }
        $this->load->view("list_client",$data);
    }
    public function index7(){
		$data['new_id'] = $this->get_client();	 
		$this->load->view('create1',$data);
	}

    public function create(){
        $this->load->model('create_model');
        $this->load->helper('array');
        $this->load->library('form_validation');
        #$this->form_validation->set_rules('ref_client','Référence_Client','required');
        $this->form_validation->set_rules('nom','Nom','required|alpha');
        $this->form_validation->set_rules('prenom','Prenom','required|alpha');
        $this->form_validation->set_rules('mail','Mail','required');
        $this->form_validation->set_rules('telephone','Téléphone','required');
        $this->form_validation->set_rules('adresse','Adresse','required');
        $this->form_validation->set_rules('ville','Ville','required');
        $this->form_validation->set_rules('genre','genre','required');
        $this->form_validation->set_rules('status','Etat','required');
        $this->form_validation->set_rules('ice','ICE','required');
        $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
        if($this->form_validation->run() ==  False){
            //$data['new_id'] = $this->get_client();
          
        
        
                $this->load->view('create1');

        }
        else{

            $formarray = array();
            #$formarray['ref_client']= $this->input->post('ref_client');
            $formarray['ref_client']=$this->create_model->getid_client();
            $formarray['nom']= $this->input->post('nom');
            $formarray['prenom']= $this->input->post('prenom');
            $formarray['mail']= $this->input->post('mail');
            $formarray['telephone']= $this->input->post('telephone');
            $formarray['adresse']= $this->input->post('adresse');
            $formarray['nom_ville']= $this->input->post('ville');
            $formarray['gender']= $this->input->post('genre');
            $formarray['status']= $this->input->post('status');
            $formarray['ice']= $this->input->post('ice');
            $this->create_model->create($formarray);
            $this->session->set_flashdata('success','le client est ajouter avec success');
            redirect(base_url().'auto/index1');

        }

    }
    public function edit_test($userid){
        $this->load->model('create_model');
        #$user=$this->create_model->getuser($userid);
        $data=array();
        #$data['user']=$user;
        $data['user']=$this->create_model->getuser($userid);
        $data['villes']=$this->create_model->getville();
        $data['details_client']=$this->create_model->genderclient();
        $data['clients']=$this->create_model->statusclient();
        #$this->form_validation->set_rules('ref_client','Référence_Client','required|is_unique[clients.ref_client]');
        $this->form_validation->set_rules('nom','Nom','required|alpha');
        $this->form_validation->set_rules('prenom','Prenom','required|alpha');
        $this->form_validation->set_rules('mail','Mail','required|valid_email');
        $this->form_validation->set_rules('telephone','Téléphone','required');
        $this->form_validation->set_rules('adresse','Adresse','required');
        $this->form_validation->set_rules('ville','Ville','required');
        $this->form_validation->set_rules('gender','Genre','required');
        $this->form_validation->set_rules('status','Etat','required');
        $this->form_validation->set_rules('ice','ICE','required');
        if($this->form_validation->run() ==  False){

            $this->load->view('edit_file',$data);
        }
        else{
            //update user record
            $formarray=array();
            #$formarray['ref_client']=$this->input->post('ref_client');
            $formarray['nom']=$this->input->post('nom');
            $formarray['prenom']=$this->input->post('prenom');
            $formarray['mail']=$this->input->post('mail');
            $formarray['telephone']=$this->input->post('telephone');
            $formarray['adresse']=$this->input->post('adresse');
            $formarray['gender']=$this->input->post('gender');
            $formarray['status']=$this->input->post('status');
            $formarray['ice']=$this->input->post('ice');
            $this->create_model->updateuser($userid,$formarray);
            $this->session->set_flashdata('success','les données de client est modifier avec success');
            #redirect('control/modifier');
            redirect(base_url().'auto/index1');

            
        }


    }
    public function delete($userid){
        $this->load->model('create_model');
        $user=$this->create_model->getuser($userid);
        if(empty($user)){
             $this->session->set_flashdata('faileur','record not found in database');
             redirect(base_url().'auto/index1');      
        }
        $this->create_model->deleteuser($userid);
        $this->session->set_flashdata('success','record deleted successfuly');
             redirect(base_url().'auto/index1'); 

    }
    
    public function update_status($id,$status){

	    $this->load->model('create_model');

	    //send id and status to the model to update the status
	    if($this->create_model->update_status($id,$status)){
                $this->session->set_flashdata('success','le client est active avec success');
                   
        }
        else{
                $this->session->set_flashdata('faileur','le client est désactiver');
        

        }
        return redirect(base_url().'auto/index1');  

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
*/
    public function notification(){
        date('Y-m-d', strtotime('-1 days'));
    }

    
    public function index3($year = NULL , $month = NULL){
       
		$this->load->model('Mycal_model');
		$data['calender'] = $this->Mycal_model->getcalender($year , $month);
        $this->load->view('calender',$data);
		
	}

}

?>