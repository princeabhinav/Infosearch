<?php
class main extends CI_Controller {

	public function index(){
		$this->load->view('select');
		//$this->load->model('item');
		//if($this->input->server('REQUEST_METHOD')=='POST'){
		//	$answer=$this->input->Post('size');
		//	echo $answer;
		}
	

	public function answer(){
		//$this->load->view('select');
		//$this->load->model('item');
		if($this->input->server('REQUEST_METHOD')=='POST'){
			$answer=$this->input->post('size');
			

			if($answer == "Admin")
			{
                 return redirect('login_controller');
			}
			else if($answer == "User")
			{
                 return redirect('User_controller');
			}
		}
	}
}
?>