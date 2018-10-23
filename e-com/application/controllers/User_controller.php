<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public function index(){
		$this->load->view('user_input');
	}
	public function answer2(){
		//$this->load->view('select');
		//$this->load->model('item');
		$this->load->model('show_model');
		if($this->input->server('REQUEST_METHOD')=='POST'){
			$answer=$this->input->post('text');
			$data["fetch_data"]=$this->show_model->show_data($answer);
			$this->load->view('show_data',$data);
						
		}
	}
}
