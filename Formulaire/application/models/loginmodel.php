<?php
class loginmodel extends CI_Model{
    public function check_user($username,$password){
        $this->db->select('*');
        $this->db->from('connexion');
        $this->db->where('username',$username);
        $this->db->where('password',md5($password));
        $query=$this->db->get();
        return $query;

    }
}
?>