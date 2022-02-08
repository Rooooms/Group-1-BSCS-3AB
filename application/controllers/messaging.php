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
        if(isset($_SESSION['usersUid'])){
			if($sender === NULL){
				$sender = $_SESSION['usersUid'];
			}
        }
        //print_r($sender);
        $data = array();
        $post = $this->input->post();
        if(isset($post) && count($post) > 0) {
            $this->load->model('messaging_model');

            $id = null;
            $id = $this->messaging_model->addMessage($post, $sender);

            if(isset($id) && !is_bool($id)) {
				//print_r($id);
                redirect('messaging/addMessage/'.$id);
            } else {
                redirect('messaging/errormsg');
            }
        }

        $this->load->model('usersModel');
        $data['receivers'] = $this->usersModel->getUser();

        $this->load->view('messaging/newMessage', $data);
    }

    public function addMessage($receiver, $sender = NULL){
        if(isset($_SESSION['usersUid'])){
			if($sender === NULL){
				$sender = $_SESSION['usersUid'];
			}
        }
        $data = array();
        $data['receiver'] = $receiver;
        $post = $this->input->post();
        if(isset($post) && count($post) > 0) {
            $this->load->model('messaging_model');

            $this->messaging_model->viewMessage($post, $sender, $receiver);

        }
        $this->load->model('messaging_model');
        $msg = $this->messaging_model->showMessage($sender, $receiver);
        if(isset($msg) && !is_bool($msg)) {
            $this->load->model('usersModel');
            $temp = $this->usersModel->getUserforMsg($receiver);
            $messages['temp'] = $temp;
            $messages['msg'] = $msg;
            $msgs = array();
            $i = 0;
            
            $this->load->view('messaging/showMessage', $messages);
            
            } else {
                redirect('error/error');
            }

        $this->load->view('messaging/viewMessages');
    }

    public function inbox($user = null){
        if(isset($_SESSION['usersUid'])){
			if($user === NULL){
				$user = $_SESSION['usersUid'];
			}
        }

        $this->load->model('messaging_model');
        $msg = $this->messaging_model->getInbox($user);
        if(isset($msg) && $msg != null) {
            $messages['msg'] = $msg;
            $msgs = array();
            $i = 0;
            foreach($messages as $msgs){
                $msgs['msg'] = $messages['msg'][$i];
                $this->load->view('messaging/inboxMessage', $messages);
            } 
        }else{
                redirect('messaging/newMessage');
            }  
    }
    
}