<?php 

  class Student extends CI_Controller {
    public function index() {
      $this->load->view('student_dashboard');

    }
    public function list(){
      $data['students' ] =  $this->db->get("students");
      $this->load->view("list_students", $data);
    }

    public function greeting(){
      $this->load->view('main.php');
    }
  }




?>