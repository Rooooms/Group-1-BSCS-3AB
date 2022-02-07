<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messaging extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('messaging_model');
		redirect("/messaging/addMessage");
    }
    public function addMessage() {
        $data = array();
        $post = $this->input->post();
        if(isset($post) && count($post) > 0) {
            $this->load->model('messaging_model');

            $id = null;
            $id = $this->messaging_model->addMessage($post);

            if(isset($id) && !is_bool($id)) {
				redirect('messaging/messageSent');
                //redirect("/messaging/getMessages/".$post['messageId']);
            } else {
                redirect('messaging/errormsg');
            }
        }

        $this->load->model('usersModel');

        $data['senders'] = $this->usersModel->getUserForMsg();
        $data['receivers'] = $this->usersModel->getUserForMsg();

        $this->load->view('messaging/addMessage', $data);
    }

	public function messageSent(){
		$this->load->view('messaging/temporary');
	}

	/*
    public function getMessages($messageId) {
        $data = array();
        if(!isset($messageId) && $messageId == null){
            $data['message'] = "Error loading message";
        } else {
            $this->load->model('messaging_model');
            $messages = $this->messaging_model->getMessages($messageId);

            $data['message'] = $messages;
        }

        $this->load->model('usersModel');

        $data['sender'] = $this->usersModel->getUserForMsg($messages[0]['senderId']);
        $data['receiver'] = $this->usersModel->getUserForMsg($messages[0]['receiverId']);

        $this->load->view('messaging/viewMessages', $data);
    }

    public function getMessageAsReceiver() {
        // get all messages where you as receiverId
        // return to view listing all messages na ikaw ang receiver
    }
	*/
}