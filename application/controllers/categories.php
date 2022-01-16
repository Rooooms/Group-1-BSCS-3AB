<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {


	public function hometesting()
	{
		$this->load->view('homepage/hometesting');
	}
    public function tradsarts()
	{
		$this->load->view('artscategory/tradsarts');
	}

	
	
}

