<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model {

	private $table = "project";

	public function __construct(){
		parent::__construct();
	}
    public function addPortfolio($data, $image, $id){

        //$data['userId']=$id;
        $data['projectImage']= $image['projectImage'];
        $data['userId']=$id;
        

        $this->db->insert($this->table, $data);
    }
    public function getPortfolio($id=null, $user=null){
        if(isset($id) && $id != null){
			$this->db->where('projectId', $id);
		}
        if(isset($user) && $user != null){
			$this->db->where('userId', $user);
		}

		$query = $this->db->get($this->table);
		
		return $query->result_array();
    }

}
