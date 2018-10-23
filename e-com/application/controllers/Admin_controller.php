<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		$id=$this->session->userdata('id');
		if(!$id){
			return redirect('login_controller');
		}
		$this->load->model('item');
	}

	function index(){

		$this->load->view('admin/index');
	}

	function add_brand(){
		$this->load->view('admin/brand/add_brand_form');
	}

	function insert_brand(){
		if ($this->form_validation->run('brand') == FALSE)
{		$this->form_validation->set_error_delimiters('<div class="error" style="color:red">', '</div>');
        $this->load->view('admin/brand/add_brand_form');
}
else
{	
		$brand = $this->input->post('brand_name');
		$date = date('d:m:y h:m:s');

		$data = array(
			'brand_name'=> $brand,
			'created_at'=>$date
		);

		
		$result = $this->item->insert_brand($data);

			if($result){
				$this->session->set_flashdata('login_error','successfully data entered');
				return redirect('Admin_controller/add_brand');
			}
			else{
				$this->session->set_flashdata('login_error','Query error please try again');
				return redirect('Admin_controller/add_brand');
			}
		//print_r($data);die;        //echo 'successfully validate';die;
}

	}

	function list_brand(){
		$result = $this->item->list_b();
		if($result){
			//echo "<pre>";print_r($result);
			$this->load->view('admin/brand/list_brnd',['data'=>$result]);
		}
		else{
			echo "no data";
		}
	}

	function edit_b($id){
		$result = $this->item->edit_brnd($id);
		$this->load->view('admin/brand/edit_brnd',['result'=>$result]);
	}
	function update_brand(){
		$id= $this->input->post('id');
		$result = $this->item->edit_brnd($id);
		if ($this->form_validation->run('brand') == FALSE)
{		$this->form_validation->set_error_delimiters('<div class="error" style="color:red">', '</div>');
        $this->load->view('admin/brand/edit_brnd',['result'=>$result]);
}
else{
	 $id=$this->input->post('id');
	 $name=$this->input->post('brand_name');
	 $result= $this->item->update_brnd($id,$name);
	 if($result){
	 	$this->session->set_flashdata('login_error','Record Updated successfully');
				return redirect('Admin_controller/list_brand');
	 }else{
	 	$this->session->set_flashdata('login_error','Query error please try again');
				return redirect('Admin_controller/add_brand');
	 }

}
	}

	function delete_b($id){
		$result = $this->item->delete_brnd($id);
		if($result){
				$this->session->set_flashdata('login_error','one record deleted successfully');
				return redirect('Admin_controller/list_brand');
		}
	}

	function add_item(){
		$result['brand'] = $this->item->list_b();
		$this->load->view('admin/item/add_item_form',['result'=>$result]);
	}

	function insert_item(){
			
			  $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'jpg|png|pdf';
                $config['max_size']             = 3000;
               

                $this->load->library('upload',$config);
                
                if ( ! $this->upload->do_upload('upload_file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);die;
                }else{
                	$file_name = $this->upload->data();
                	 
                	 $data['img'] = $file_name['file_name'];
                	 $data['item_name'] = $this->input->post('item_name');
                	 $data['price'] = $this->input->post('price');
                	 $data['brand_id'] = $this->input->post('brand_id');
                	 $data['des'] = $this->input->post('des');
                	 $data['created_at'] = date('d:m:y h:m:s');

                	 $result = $this->item->add_item($data);
                	 if($result){
                	 	$this->session->set_flashdata('login_error','Record updated successfully');
                	 	return $this->add_item();
                	 }else{
                	 	echo "query error";die;
                	 }
                }
		}
	

	function list_item(){
		$result = $this->item->list_items();

		$this->load->view('admin/item/list_item',['data'=>$result]);
	}

	function edit_item($id){
		$data = $this->item->edit_rec($id);
		$result['brand'] = $this->item->list_b();
		
		$this->load->view('admin/item/edit_item',['data'=>$data,'result'=>$result]);
		//print_r($result);
	}

	
	function logout(){
		$this->session->unset_userdata('id');
		return redirect('login_controller');
	}


}

