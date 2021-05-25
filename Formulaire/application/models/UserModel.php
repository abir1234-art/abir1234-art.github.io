<?php

class UserModel extends CI_Model{

    public function loginUser($data){

    $this->db->select('*');
    $this->db->where('email',$data['email']);
    $this->db->where('password',$data['password']);
    $this->db->from('contact');
    $this->db->limit(1);
    $query = $this->db->get();
    if($query->num_rows() == 1)
    {
    return $query->row();
    }
    else{
        return  FALSE;
    }
    }

    public function register_user($data){
        return $this->db->insert('contact',$data);
    }
}
?>