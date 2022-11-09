<?php
class Login extends CI_Controller{
        public function index(){
            $this->load->view("main.php");
        }

        public function __construct()
{
  parent::__construct();
  $this->load->helper('url');

}


}

?>


