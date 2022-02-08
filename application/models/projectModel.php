<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projectmodel extends CI_Model {

	private $table = "service";

	public function __construct(){
		parent::__construct();
	}

    public function addProject($data, $image, $id){

        //$data['userId']=$id;
        $data['serviceImage']= $image['serviceImage'];
        $data['userId']=$id;
        

        $this->db->insert($this->table, $data);
    }

    public function getProject($id=null, $user=null){
        if(isset($id) && $id != null){
			$this->db->where('serviceId', $id);
		}
        if(isset($user) && $user != null){
			$this->db->where('userId', $user);
		}

		$query = $this->db->get($this->table);
		
		return $query->result_array();
    }
   

}