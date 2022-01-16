<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('users/landing');
	}
<<<<<<< HEAD
=======

	//Homepage Buttons
	public function hometest(){
		$this->load->view('homepage/testing');
	}
>>>>>>> acfb4e978c66ee03a948fe2b10ae5f989d18699d
	
	
}

