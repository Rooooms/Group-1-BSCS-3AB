<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function index($id=null){
		$this->load->model('projectModel');
		$result=$this->projectModel->getProject($id, null, 'Traditional Arts');
		
		for($i=0; $i<count($result); $i++){
			$user=$this->usersModel->getUser($result[$i]['userId']);	
			$result[$i]['seller']=$user[0]['usersName'];
			$result[$i]['sellerpic']=$user[0]['profilepic'];
			$result[$i]['selleruid']=$user[0]['usersUid'];
			
		} 
		$output['project']=$result;
		$this->load->view('artscategory/tradsarts', $output);
	}
	
	public function tradsarts($id=null){
		$this->load->model('projectModel');
		$result=$this->projectModel->getProject($id, null, 'Traditional Arts');
		
		for($i=0; $i<count($result); $i++){
			$user=$this->usersModel->getUser($result[$i]['userId']);	
			$result[$i]['seller']=$user[0]['usersName'];
			$result[$i]['sellerpic']=$user[0]['profilepic'];
			$result[$i]['selleruid']=$user[0]['usersUid'];
			
		} 
		$output['project']=$result;
		$this->load->view('artscategory/tradsarts', $output);
}

	public function digitalarts($id=null){

		$this->load->model('projectModel');
		$result=$this->projectModel->getProject($id, null, 'Digital Arts');
		
		for($i=0; $i<count($result); $i++){
			$user=$this->usersModel->getUser($result[$i]['userId']);	
			$result[$i]['seller']=$user[0]['usersName'];
			$result[$i]['sellerpic']=$user[0]['profilepic'];
			$result[$i]['selleruid']=$user[0]['usersUid'];
			
		} 
		$output['project']=$result;
		$this->load->view('artscategory/digitalarts', $output);
	}

	public function graphicdes($id=null){
		$this->load->model('projectModel');
		$result=$this->projectModel->getProject($id, null, 'Graphics Arts');
		
		for($i=0; $i<count($result); $i++){
			$user=$this->usersModel->getUser($result[$i]['userId']);	
			$result[$i]['seller']=$user[0]['usersName'];
			$result[$i]['sellerpic']=$user[0]['profilepic'];
			$result[$i]['selleruid']=$user[0]['usersUid'];
			
		} 
		$output['project']=$result;
		$this->load->view('artscategory/graphicdes', $output);

	
	}

	public function photography($id=null){
		$this->load->model('projectModel');
		$result=$this->projectModel->getProject($id, null, 'Photography');
		
		for($i=0; $i<count($result); $i++){
			$user=$this->usersModel->getUser($result[$i]['userId']);	
			$result[$i]['seller']=$user[0]['usersName'];
			$result[$i]['sellerpic']=$user[0]['profilepic'];
			$result[$i]['selleruid']=$user[0]['usersUid'];
			
		} 
		$output['project']=$result;
		$this->load->view('artscategory/photography', $output);
	}

	public function pubmats($id=null){
		$this->load->model('projectModel');
		$result=$this->projectModel->getProject($id, null, 'Publication Material');
		
		for($i=0; $i<count($result); $i++){
			$user=$this->usersModel->getUser($result[$i]['userId']);	
			$result[$i]['seller']=$user[0]['usersName'];
			$result[$i]['sellerpic']=$user[0]['profilepic'];
			$result[$i]['selleruid']=$user[0]['usersUid'];
			
		} 
		$output['project']=$result;
		$this->load->view('artscategory/pubmats', $output);
	}

	public function typography($id=null){
		$this->load->model('projectModel');
		$result=$this->projectModel->getProject($id, null, 'Typography');
		
		for($i=0; $i<count($result); $i++){
			$user=$this->usersModel->getUser($result[$i]['userId']);	
			$result[$i]['seller']=$user[0]['usersName'];
			$result[$i]['sellerpic']=$user[0]['profilepic'];
			$result[$i]['selleruid']=$user[0]['usersUid'];
			
		} 
		$output['project']=$result;
		$this->load->view('artscategory/typography', $output);
	}

	public function webdes($id=null){
		$this->load->model('projectModel');
		$result=$this->projectModel->getProject($id, null, 'Website Design');
		
		for($i=0; $i<count($result); $i++){
			$user=$this->usersModel->getUser($result[$i]['userId']);	
			$result[$i]['seller']=$user[0]['usersName'];
			$result[$i]['sellerpic']=$user[0]['profilepic'];
			$result[$i]['selleruid']=$user[0]['usersUid'];
			
		} 
		$output['project']=$result;
		$this->load->view('artscategory/webdes', $output);
	}
	
}

