<?php

class student extends CI_Controller{
    public function index(){

    }

    public function List(){
       $data['students']=$this->db->get("students");
       $this->load->view("list-students",$data);
    }
}

?>