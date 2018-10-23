<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Show_model extends CI_Model {
	function show_data($answer)
	{
		$this->load->database();
		$query = $this->db->query("select * from items join brands on brands.id=items.brand_id and brands.brand_name='$answer'");
		return $query;
	}
}
