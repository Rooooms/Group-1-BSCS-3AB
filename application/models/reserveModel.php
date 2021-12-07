<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reserveModel extends CI_Model {

	private $table = "reserve";

	public function __construct(){
		parent::__construct();
	}

    public function reserveUser($data){	
			$this->db->insert($this->table, $data);
	}		
}