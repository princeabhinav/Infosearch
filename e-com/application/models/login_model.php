<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function admin_login($name,$pass){
		$this->load->database();
	$query =	$this->db->select()
			->where(['username'=>$name,'pass'=>$pass])
			->get('admin');
			return $query->row();
	}
}
