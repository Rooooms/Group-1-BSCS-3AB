<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function index(){
		$this->load->view('artscategory/tradsarts');
	}

	public function digitalarts(){
		$this->load->view('artscategory/digitalarts');
	}

	public function graphicdes(){
		$this->load->view('artscategory/graphicdes');
	}

	public function photography(){
		$this->load->view('artscategory/photography');
	}

	public function pubmats(){
		$this->load->view('artscategory/pubmats');
	}

	public function tradsarts(){
		$this->load->view('artscategory/tradsarts');
	}

	public function typography(){
		$this->load->view('artscategory/typography');
	}

	public function webdes(){
		$this->load->view('artscategory/webdes');
	}
	
}

