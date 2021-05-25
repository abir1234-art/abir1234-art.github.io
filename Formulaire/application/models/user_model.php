<?php

class user_model extends CI_Model{

    #public function get_users()
    #{
    #    $query=$this->db->get('users');
    #    return $query->result();
    #}
    public function select_users($user_id){
        $this->db->where('id',$user_id);
        $query=$this->db->get('users');
        return $query->result();
      
    }
    public function insert_user($data){
        $query=$this->db->insert('users',$data);
    }
    public function update_user($user_id,$data)
    {
        $this->db->where('id',$user_id);
        $query=$this->db->update('users',$data);

    }
    public function delete_user($user_id)
    {
        $this->db->where('id',$user_id);
        $query=$this->db->delete('users');
    }
}

?>