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
	public function updateprofile($usersId = null){
		$this->load->model('usersModel');
		$user = $this->usersModel->getUsers($usersId);

		$output['user'] = $user[0];

		$this->load->view('users/updateprofile', $output);
	}   
	public function updateUser(){
		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null)
			$this->load->model('usersModel');
		
		$this->usersModel->updateUser($data);

	}
	public function getUser()
	{
		$this->load->model('usersModel');

		$users = $this->usersModel->getUsers();
		$output['users'] = $users;

		$this->load->view('/users/getUser', $output);
	}
	public function updateStatus($usersId, $status){
		$this->load->model('usersModel');

		$this->usersModel->updateUserStatus($usersId, $status);
		
		redirect('/users/getUser');
	}
}
	 
   
