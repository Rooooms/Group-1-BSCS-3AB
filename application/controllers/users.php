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
			redirect(base_url());
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

	//CATEGORIES
	public function tradarts(){
		$this->load->view('categories/tradarts');
	}
	public function digitalarts(){
		$this->load->view('categories/digitalarts');
	}
	public function photography(){
		$this->load->view('categories/photography');
	}
	public function typography(){
		$this->load->view('categories/typography');
	}
	public function graphicdes(){
		$this->load->view('categories/graphicdes');
	}
	public function pubmats(){
		$this->load->view('categories/pubmats');
	}
	public function webdes(){
		$this->load->view('categories/webdes');
	}
	public function animation(){
		$this->load->view('categories/animation');
	}
	
}
    
   
