<?php

class user extends CI_Controller{

    #public function index()
    #{
    #    $data['users']=$this->user_model->get_users();
    #    $this->load->view('users_view',$data);
    #}
    public function display($user_id){
        $data['users']=$this->user_model->select_users($user_id);
        $this->load->view('users_view',$data);
    }
    public function insert(){
        $data=array(
            'username'=> 'ali123',
            'password'=>  'ali12345'
        );
        $this->user_model->insert_user($data);
    }
    public function update($user_id)
    {
        $data=array(
            'username'=> 'Ali123',
            'password'=>  'ali12345678'
        );
        $this->user_model->update_user($user_id,$data);
    }
    public function delete($user_id)
    {
        $this->user_model->delete_user($user_id);
    }
}
?>