<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorypick extends CI_Controller {

public function categorypick($id=null) {
		
		$data = array();
		$data = $this->input->post('categoryPick');
	
		
		if(isset($data) && $data != null){
			
			$this->load->model('category_model');
			
			foreach ($data as $category){
				$this->category_model->addCategory($id, $category);
			}
			
			redirect('users/profilepic');
		}
			

			$this->load->view('users/categorypick');

		}
}