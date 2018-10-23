<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Model {

	function insert_brand($data){
		//$this->load->database();
		$qry = $this->db->insert('brands' ,$data);
		return $qry;
	}

	function list_b(){
		$qry = $this->db->select('*')
		->get('brands');

		return $qry->result();
	}
	function edit_brnd($id){
		$qry = $this->db->select('*')
					->where('id',$id)
					->get('brands');
			return $qry->row();
	}
	function update_brnd($id,$name){
		$qry = $this->db
					->where('id',$id)
					->update('brands',['brand_name'=>$name]);
				return $qry;
	}

	function delete_brnd($id){
		$qry = $this->db
					->delete('brands',['id'=>$id]);
					return $qry; 
	}

	function add_item($data){
		$qry = $this->db->insert('items',$data);
		return $qry;
	}
	function list_items(){
		$qry = $this->db->select('items.id as item_id,item_name,img,price,brand_name')
					->from('items','brands')
					->join('brands','items.brand_id= brands.id','left')
					->get();
				return $qry->result();
	}

	function edit_rec($id){
		$qry = $this->db->select('items.id as item_id,brands.id as b_id,item_name,img,price,brand_name,des')
					->from('items','brands')
					->where('items.id',$id)
					->join('brands','items.brand_id= brands.id','left')
					->get();
				return $qry->result();
	}

}
