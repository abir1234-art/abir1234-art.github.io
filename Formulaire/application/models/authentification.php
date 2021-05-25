<?php

class authentification extends CI_Model{

    public function loginUser($data){

    $this->db->select('*');
    $this->db->where('username',$data['username']);
    $this->db->where('password',$data['password']);
    $this->db->from('connexion');
    #$this->db->limit(10);
    $query = $this->db->get();
    if($query->num_rows())
    {
    return $query->row();
    }
    else{
        return  FALSE;
    }
    }

  
}
?>