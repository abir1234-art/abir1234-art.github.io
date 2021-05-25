<?php
class create_model extends CI_Model{

    public function create($formarray){
          $this->db->insert('clients',$formarray);
      }
    public function getall(){
           return $users = $this->db->get('clients')->result_array();
        
            #$users = $this->db->get("clients");
            #if($users->num_rows() > 0)
            #{
            #    return $users->result();
            #}
            #return array();

    }
    public function getuser($userid){
        $this->db->where('id',$userid);
        return $user=$this->db->get('clients')->row_array();

    }
    public function updateuser($userid,$formarray){
        $this->db->where('id',$userid);
        $this->db->update('clients',$formarray);

    }
    public function deleteuser($userid){
        $this->db->where('id',$userid);
        $this->db->delete('clients');


    }
    
}

?>