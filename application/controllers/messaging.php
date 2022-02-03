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

<<<<<<< HEAD
    //use sort if there is a way to pick receiver from view, for now newMessage is default
    public function sort($receiver, $sender = null){
        if(isset($_SESSION['usersId'])){
			if($sender === NULL){
				$sender = $_SESSION['usersId'];
			}
        }
        $this->load->model('messaging_model');
        $sort = null;
        $sort = $this->messaging_model->showMessage($sender, $receiver);

        if(isset($sort) && !is_bool($sort)){
            redirect('messaging/addMessage/',$receiver);
        } else {
            redirect('messaging/newMessage');
        }
    }

    public function newMessage($sender = null) {
        if(isset($_SESSION['usersId'])){
			if($sender === NULL){
				$sender = $_SESSION['usersId'];
			}
        }
        //print_r($sender);
=======
    public function addMessage() {
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
        $data = array();
        $post = $this->input->post();
        if(isset($post) && count($post) > 0) {
            $this->load->model('messaging_model');

            $id = null;
<<<<<<< HEAD
            $id = $this->messaging_model->addMessage($post, $sender);

            if(isset($id) && !is_bool($id)) {
				//print_r($id);
                redirect('messaging/addMessage/'.$id);
=======
            $id = $this->messaging_model->addMessage($post);

            if(isset($id) && !is_bool($id)) {
				redirect('messaging/messageSent');
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
                //redirect("/messaging/getMessages/".$post['messageId']);
            } else {
                redirect('messaging/errormsg');
            }
        }

        $this->load->model('usersModel');
<<<<<<< HEAD
        $data['receivers'] = $this->usersModel->getUser();

        $this->load->view('messaging/newMessage', $data);
    }

    public function addMessage($receiver, $sender = NULL){
        if(isset($_SESSION['usersId'])){
			if($sender === NULL){
				$sender = $_SESSION['usersId'];
			}
        }
        //print_r($sender);
        $data = array();
        $post = $this->input->post();
        if(isset($post) && count($post) > 0) {
            $this->load->model('messaging_model');

            $this->messaging_model->viewMessage($post, $sender, $receiver);

        }
        $this->load->model('messaging_model');
        $msg = $this->messaging_model->showMessage($sender, $receiver);
        if(isset($msg) && !is_bool($msg)) {
            $messages['msg'] = $msg;
            $msgs = array();
            $i = 0;
            foreach($messages as $msgs){
                $msgs['msg'] = $messages['msg'][$i];
                $this->load->view('messaging/showMessage', $messages);
            }
            } else {
                redirect('error/error');
            }

        $this->load->view('messaging/viewMessages', $data);
    }
=======

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
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
}