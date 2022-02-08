<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout_model extends CI_Model {
    private $table = "checkout";

	public function __construct(){
		parent::__construct();
	}

	public function addCheckout($data){
		
			$this->db->insert($this->table, $data);
	}
}
