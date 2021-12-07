<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserve extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function reserve(){
		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null){
			$this->load->model('reserveModel');
			$this->reserveModel->reserveUser($data);
		}
		$this->load->view('reserve/reserves');
	}

    
}