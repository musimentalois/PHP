<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['LISTDATA']=$this->crud->get_data('registration');
		$this->load->view('listing',$data);
	}
	
	public function add()
	{
		if(isset($_POST['submit']))
		{
			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['mobile']=$this->input->post('mobile');
			
			$this->crud->insert('registration',$data);
			redirect(base_url());
		}
		$this->load->view('add');
	}
	
	public function edit()
	{
		$args=func_get_args();
		
		if(isset($_POST['submit']))
		{
			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['mobile']=$this->input->post('mobile');
			
			$this->crud->update('registration',$args[0],$data);
			redirect(base_url());
		}
		$data['EDITDATA']=$this->crud->fetchdatabyid($args[0],'registration');
		$this->load->view('edit',$data);
	}
	
	public function delete()
	{
	   $args=func_get_args();
	   
	   $this->crud->delete('registration',$args[0]);
	   
	   redirect(base_url());
	   
	}
	
}
