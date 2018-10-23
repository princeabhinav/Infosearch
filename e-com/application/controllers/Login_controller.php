<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_controller extends CI_Controller {
	function __construct(){
			parent::__construct();
		if($this->session->userdata('id')){
			return redirect('admin_controller');
		}
	}
	function index(){
		
		$this ->load ->view('admin/admin_login/login');
		
		
		//$this->load->model('login_model');
		//$this->login_model->admin_login();
	}

	function login_pro(){
		//$this->load->helper('url','form');
		

		 $this->form_validation->set_rules('Username','User Name', 'required|valid_email');

		  $this->form_validation->set_rules('Password','Password', 'required|min_length[5]');
                if ($this->form_validation->run() == FALSE)
                {
                	//echo 'enter the valid value';
                	$this->form_validation->set_error_delimiters('<div class="error" style="color:red">', '</div>');
                        $this->load->view('admin/admin_login/login');
                }
                else
                {
                       $name = $this->input->post('Username');
						$pass = $this->input->post('Password');
						$this->load->model('login_model');
						$result = $this->login_model->admin_login($name,$pass);
						if($result){
							$id=$result->id; 
							$this->session->set_userdata('id',$id);
							return redirect('admin_controller');
						}else{
							$this->load->library('session');
							
						}
					}

		//echo $name = $this->input->post('Username');
		//echo $pass = $this->input->post('Password');
	}
}
