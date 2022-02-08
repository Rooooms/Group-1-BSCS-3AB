<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderprocess extends CI_Controller {

    public function addMode($id){
        $data = array();
		$post = $this->input->post();
        
		if(isset($post) && $post != null){
            $this->load->model('orderprocessmodel');
            $order = null;
            $order = $this->orderprocessmodel->addMode($post, $id);

			redirect('users/buyerhomepage');

        }

        $this->load->view('orderprocess/orderprocessview');
    }

    public function projectPreview($id)
    {   
        $this->load->model('orderprocessmodel');
        $data=$this->orderprocessmodel->get_details($id);
        //print_r($data);
        $output['data']=$data[0];

        $this->load->view('orderprocess/orderdetails', $output);
    }

}