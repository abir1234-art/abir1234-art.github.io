<?php
class user_model1 extends CI_Model{
    public function __construct()
    {
        // Appel du constructeur de modèle
        parent :: __construct();
    }
    
    // insérer dans la table utilisateur
    public function insertUser($data)
    {
        return $this->db->insert('user1',$data);
    }
    
    // envoyer un e-mail de vérification à l'identifiant de messagerie de l'utilisateur
    public function sendEmail($to_email)
    {
        $from_email = 'ajotrans1@gmail.com'; // changez ceci pour le vôtre
        $subject = 'Vérifiez votre adresse e-mail';
        #$message = 'Veuillez cliquer sur le lien d''activation ci-dessous pour vérifier votre adresse e-mail. <br /> <br /> http://www.mydomain.com/user/verify/ »'.md5($to_email). '<br /> <br /> <br /> Merci <br /> Mydomain Team';
        $message="bienvenu";
        // configurer les paramètres de messagerie
        $config['protocol']='smtp';
        $config['smtp_host']='ssl: //smtp.mydomain.com'; // nom d'hôte smtp
        $config['smtp_port']='465'; // numéro de port smtp
        $config['smtp_user']=$from_email;
        $config['smtp_pass']='bouarfa123'; // $ from_email mot de passe
        $config['mailtype']='html';
        $config['charset']='iso-8859-1';
        $config['wordwrap']=TRUE;
        $config['newline']="\r\n"; // utiliser des guillemets doubles
        $this->email->initialize($config);
        
        //envoyer un mail
        $this->email->from($from_email,'Mydomain');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send ();
    }
    
    // activer le compte utilisateur
    public function verifyEmailID($key)
    {
        $data = array('status' => 1);
        $this->db->where('md5 (email)',$key);
        return $this->db->update('user1',$data);
    }
}
?>