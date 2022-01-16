<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testingupload extends CI_Model {
    private $table = "image";

	public function __construct(){
		parent::__construct();
	}


    public function test($data){

        $this->db->insert($this->table, $data);
        
    }
    public function getImage(){
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

}