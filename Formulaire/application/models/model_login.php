<?php

class model_login extends CI_Model{
    public function email_exists($email){
        $sql="select  username, email from connexion where email='{$email}' LIMIT 1 ";
        $result=$this->db->query($sql);
        $row=$result->row();

        return ($result->num_rows() == 1 && $row->email)? $row->username : false;



    }
    public function verify_reset_password_code($email,$code){
        $sql="select  username, email from connexion where email='{$email}' LIMIT 1";
        $this->db->query($sql);
        $row=$result->row();
        if($result->row_num() == 1){
            return ($code == md5($this->config->item('salt') . $row->username)) ? true : false;

        }
        else{
            return false;
        }

        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }


    }
    public function update_password(){
        $email=$this->input->post('email');
        $password=sha1($this->config->item('salt') . $this->input->post('password'));
        $sql="update connexion set password='{$password}' where email='{$email}' limit 1";
        $this->db->query($sql);

        if($this->db->affected_rows() === 1){
           return true;
        else{
            return false;
        }
        
    }
}

?>