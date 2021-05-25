<?php
class user1 extends CI_Controller{
    public function __construct()
    {
        parent :: __construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session','form_validation','email'));
        $this->load->database();
        $this->load->model('user_model1');
    }
    
    public function index()
    {
        $this->register ();
    }

    public function register()
    {
        // définir les règles de validation
        $this->form_validation->set_rules('fname','First Name','trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('lname','Last Name','trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('email','Email ID','trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password','Password','trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required');
        
        // valider la saisie du formulaire
        if ($this->form_validation->run() == FALSE)
        {
            // échoue
            $this->load->view('user_registration_view');
        }
        else
        {
            // insérer les détails d'enregistrement de l'utilisateur dans la base de données
            $data=array(
                 'fname'=>$this->input->post('fname'),
                 'lname'=>$this->input->post('lname'),
                 'email'=>$this->input->post('email'),
                 'password'=>$this->input->post('password')
            );
            
            // insérer les données du formulaire dans la base de données
            if($this->user_model1->insertUser($data))
            {
                // envoyer un e-mail
                if($this->user_model1->sendEmail($this->input->post('email')))
                {
                    // courrier envoyé avec succès
                    $this->session->set_flashdata('msg', '<div class = "alert alert-success text-center"> Vous êtes bien enregistré! Veuillez confirmer le mail envoyé à votre Email-ID !!! </div> ');
                    rediriger ('utilisateur / sinscrire');
                }
                else
                {
                    // Erreur
                    $this->session->set_flashdata('msg', '<div class = "alert alert-danger text-center"> Oups! Erreur. Veuillez réessayer plus tard !!! </div>');
                    rediriger ('utilisateur / sinscrire');
                }
            }
            else
            {
                // Erreur
                $this->session->set_flashdata('msg', '<div class = "alert alert-danger text-center"> Oups! Erreur. Veuillez réessayer plus tard !!! </div>');
                rediriger('utilisateur / sinscrire');
            }
        }
    }
    
    public function verifier ($hash = NULL)
    {
        if($this->user_model1->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg', '<div class = "alert alert-success text-center"> Votre adresse e-mail a été vérifiée avec succès! Veuillez vous connecter pour accéder à votre compte! </div>');
            rediriger ('utilisateur / sinscrire');
        }
        else
        {
            $this->session->set_flashdata('verify_msg', '<div class = "alert alert-danger text-center"> Désolé! Une erreur sest produite lors de la vérification de votre adresse e-mail! </div>');
            rediriger ('utilisateur / sinscrire');
        }
    }
}
?>