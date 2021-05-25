<?php
class usermodel1 extends CI_Model{
    public function loginuser($data){
        $this->db->select('*');
        $this->db->where('email',$data['email']);
        $this->db->where('password',$data['password']);
        $this->db->from('connexion');
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->row();
        }
        else{
            return false;
        }
    }
      public function registeruser($data){
          return $this->db->insert('connexion',$data);

      }
}
?>