<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projectmodel extends CI_Model {

	private $table = "service";

	public function __construct(){
		parent::__construct();
	}

    public function addProject($data, $image){

        //$data['userId']=$id;
        $data['serviceImage']= $image['serviceImage'];
        

        $this->db->insert($this->table, $data);
    }

    public function getProject(){
        if(isset($id) && $id != null){
			$this->db->where('serviceId', $id);
		}

		$query = $this->db->get($this->table);
		
		return $query->result_array();
    }


}