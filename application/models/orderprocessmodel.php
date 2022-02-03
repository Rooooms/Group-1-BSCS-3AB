<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orderprocessmodel extends CI_Model {

    private $table = "orderprocess";

    public function addMode($data, $id){
        
        $data['projectid'] = $id;

        $this->db->insert($this->table, $data);

    }

    public function get_details($id)
    {
        $query = $this->db->query("SELECT * FROM service WHERE serviceId='$id'");
        return $query->result_array();;
    }
}