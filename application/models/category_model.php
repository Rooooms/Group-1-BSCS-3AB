<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {
    private $table = "category";

	public function __construct(){
		parent::__construct();
	}
    
    
    public function addCategory($id, $category){
		
		$data['categorypick']=$category;
		$data['categoryUser']=$id;
			
		$this->db->insert($this->table, $data);
	}

}