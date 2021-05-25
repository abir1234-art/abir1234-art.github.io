<?php
class crud_model extends CI_Model{
    public function getrecords(){
        $query=$this->db->get('client');
        #if($query->num_rows()>0){
        #    return $query->row();
        return $query->result();

        #}

    }
    public function saverecords($data){
        return $this->db->insert('client',$data);
        /*
        $data= array(
            'nom'  => $this->input->post('nom'),
            'prenom'  => $this->input->post('prenom'),
            'mail'  => $this->input->post('mail'),
            'telephone'  => $this->input->post('telephone'),
            'adresse'  => $this->input->post('adresse')
        );
        return $this->db->insert('client',$data);*/
       
    }
    public function getallrecords($record_id){
        $query=$this->db->get_where('client',array('id'=>$record_id));
        if($query->num_rows()>0){
            return $query->row();
        }

    }
    public function updaterecords($record_id,$data){
        return $this->db->where('id',$record_id)->update('client',$data);

    }
    public function deleterecords(){
        
        return $this->db->delete('client',array('id',$record_id));


    }

    }



?>