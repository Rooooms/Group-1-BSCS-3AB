<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('users/landing');
	}

	//Homepage Buttons
	public function hometest(){
		$this->load->view('homepage/testing');
	}
	
	
}

