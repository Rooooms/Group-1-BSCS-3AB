<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function signup(){
		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null){
			$this->load->model('usersModel');
			$this->usersModel->createUser($data);
			$this->load->view('users/signup');
		}
		$this->load->view('users/signup');
	}
	
	public function login(){
		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null){
			$this->load->model('usersModel');
			$return = $this->usersModel->loginUser($data['usersUid'], $data['usersPwd']);

			if(is_bool($return)){
				echo "login error";
			}
			else{
				$_SESSION['usersId'] = $return[0]['usersId'];
				$_SESSION['usersUid'] = $return[0]['usersUid'];
				redirect('users/homepage');
			}
		}

		$this->load->view('users/login');
	}
	
	public function landing(){
		$this->load->view('users/landing');
	}
	public function homepage(){
		$this->load->view('homepage/homepage');
	}
	public function logout(){
        session_destroy();
        redirect(base_url());
    }
}
    
   
