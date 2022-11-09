<?php

// define('BASEPATH') or exit ('No direct script accessed');
class  Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  
  }
      public function index(){
        
        $this->load->view("home.php");
      }
}

?>