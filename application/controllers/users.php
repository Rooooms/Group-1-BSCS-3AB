<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function signup(){
		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null){
			$this->load->model('usersModel');
			$result=$this->usersModel->createUser($data);
            $_SESSION['user'] = $result;
			if(is_int($result)){
			redirect('categorypick/categorypick/'. $result);
			}
		}
		$this->load->view('users/signup');
	}
	
	public function login(){
		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null){
			$this->load->model('usersModel');
			$return = $this->usersModel->loginUser($data['usersUid'], $data['usersPwd']);

			if(is_bool($return)){
				echo "login error";
			}
			else{
				$_SESSION['usersId'] = $return[0]['usersId'];
				$_SESSION['usersUid'] = $return[0]['usersUid'];
				redirect('users/homepage');
			}
		}

		$this->load->view('users/login');
	}
	
	public function landing(){
		$this->load->view('users/landing');
	}
	public function homepage(){
		$this->load->view('homepage/homepage');
	}
	public function logout(){
        session_destroy();
        redirect(base_url());
    }

	public function profile($id = NULL){
		
		if(isset($_SESSION['usersId'])){
			if($id === NULL){
				$id = $_SESSION['usersId'];
			}
			$this->load->model('usersModel');
			$user = $this->usersModel->getUser($id);
			$output['user'] = $user[0];
			$this->load->view('users/Profile', $output);
		}
	}
	function uniqidReal($lenght = 13) {
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }

	public function testingUpload(){
		if(isset($_FILES) && $_FILES!= null){
            $file = $_FILES['image'];
            $fileName = $_FILES['image']['name'];
            $fileTmpName = $_FILES['image']['tmp_name'];
            $fileSize = $_FILES['image']['size'];
            $fileError = $_FILES['image']['error'];
            $fileType = $_FILES['image']['type'];
            

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            
            $allowed = array('jpg', 'jpeg', 'png');
            
            if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 500000){
                        $uniqID = $this->uniqidReal();
                        $fileNewName = $uniqID.".".$fileActualExt;
                        $fileDestination = $_SERVER['DOCUMENT_ROOT']."./php/public/uploads/image/".$fileNewName;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        //$image = base64_encode(file_get_contents(addslashes($image)));
                        //$data['image'] = $image;
                        //$_SESSION['info']['image'] = $data['image'];
                        $_SESSION['info']['image'] = base_url()."public/uploads/image/".$fileNewName;
						$this->load->model('testingupload');
                        $this->testingupload->test($_SESSION['info']);
                    }
                    else{
                        echo "File too big";
                    }
                }
                else{
                    echo "Error uploading file!";
                }
            }
            else{
                echo "Not allowed file type!";
            }

        }
		/*if(isset($_FILES) && $_FILES != null){

		print_r($_FILES);
		exit;
		}*/

		$this->load->view ('users/testingUpload');
	}

	public function getImage(){
		$this->load->model('testingupload');
			$image = $this->testingupload->getImage();
			$output['image'] = $image[0];
			$this->load->view('users/upload', $output);
	}   

	public function profilepic(){
		if(isset($_FILES) && $_FILES!= null){
            $file = $_FILES['profilepic'];
            $fileName = $_FILES['profilepic']['name'];
            $fileTmpName = $_FILES['profilepic']['tmp_name'];
            $fileSize = $_FILES['profilepic']['size'];
            $fileError = $_FILES['profilepic']['error'];
            $fileType = $_FILES['profilepic']['type'];
            

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            
            $allowed = array('jpg', 'jpeg', 'png');
            
            if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 500000){
                        $uniqID = $this->uniqidReal();
                        $fileNewName = $uniqID.".".$fileActualExt;
                        $fileDestination = $_SERVER['DOCUMENT_ROOT']."./php/public/uploads/image/".$fileNewName;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        //$image = base64_encode(file_get_contents(addslashes($image)));
                        //$data['image'] = $image;
                        //$_SESSION['info']['image'] = $data['image']; 
						$this->load->model('usersModel');
                        echo $_SESSION['user'];
                        $user=$this->usersModel->getUser($_SESSION['user']); 
                        print_r($user);
                        $data = $user[0];
                        $data['profilepic'] = base_url()."public/uploads/image/".$fileNewName;
                        print_r($data);
                       
                        $this->usersModel->profilepic($data);
                    }
                    else{
                        echo "File too big";
                    }
                }
                else{
                    echo "Error uploading file!";
                }
            }
            else{
                echo "Not allowed file type!";
            }

        }
		
		$this->load->view('users/profilepicture');
	}
	
	
	
}

    
   
