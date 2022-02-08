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
            $user=$this->usersModel->getUser($result);
            $_SESSION['user'] = $user[0];
            if($user[0]['usersCategory']==='Buyer'){
			if(is_int($result)){
			redirect('categorypick/categorypick/'. $result);
			}
        }
            if($user[0]['usersCategory']==='Seller'){
                if(is_int($result)){
                    redirect('users/profilepic/'. $result);
            }
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
				redirect('users/userSort');
			}
		}

		$this->load->view('users/login');
	}
	
	public function landing(){
		$this->load->view('users/landing');
	}
	public function buyerhomepage($id= NULL){

        //$this->usersModel->getUser($id, $userCategory){

        //}
        
        $this->load->model('projectModel');
        $project=$this->projectModel->getProject();
        for ($i=0; $i<count($project);$i++ ){
            $result=$this->usersModel->getUser($project[$i]['userId']);
            $project[$i]['seller']=$result[0]['usersName'];
            $project[$i]['sellerpic']=$result[0]['profilepic'];
            $project[$i]['selleruid']=$result[0]['usersUid'];
        }

        $output['project']=$project;

       
		$this->load->view('homepage/buyerhomepage', $output);
	}
    public function sellerhomepage($id=null){
        if(isset($_SESSION['usersId'])){
            if($id==null){
                $id=$_SESSION['usersId'];
            }
            $result=$this->usersModel->getUser($id);
            $output['user']=$result[0];
            $this->load->model('projectModel');
            $project=$this->projectModel->getProject(null, $id);
            $output['project']=$project;
            $this->load->model('portfolio_model');
            $portfolio=$this->portfolio_model->getPortfolio(null, $id);
            $output['portfolio']=$portfolio;
          
            $this->load->view('homepage/sellerhomepage', $output);


        }
		
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

	public function getImage(){
		$this->load->model('testingupload');
			$image = $this->testingupload->getImage();
			$output['image'] = $image[0];
			$this->load->view('users/upload', $output);
	}   

	public function profilepic($id=null){
		if(isset($_FILES) && $_FILES!= null){
            $file = $_FILES['profilepic'];
            $fileName = $_FILES['profilepic']['name'];
            $fileTmpName = $_FILES['profilepic']['tmp_name'];
            $fileSize = $_FILES['profilepic']['size'];
            $fileError = $_FILES['profilepic']['error'];
            $fileType = $_FILES['profilepic']['type'];
            

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            
            $allowed = array('jpg', 'jpeg', 'png' ,'jfif');
            
            if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 500000){
                        $uniqID = $this->uniqidReal();
                        $fileNewName = $uniqID.".".$fileActualExt;
                        $fileDestination = APPPATH."../public/uploads/image/".$fileNewName;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        //$image = base64_encode(file_get_contents(addslashes($image)));
                        //$data['image'] = $image;
                        //$_SESSION['info']['image'] = $data['image'];
                       
						$this->load->model('usersModel');
                        $user=$this->usersModel->getUser($_SESSION['user']['usersId']); 
                        $data = $user[0];
                        $data['profilepic'] = base_url()."public/uploads/image/".$fileNewName;
                    
                       
                        $result=$this->usersModel->profilepic($data);

                        redirect('users/login');
                        
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

    public function userSort($id = NULL){
        if($id === NULL){
            $id = $_SESSION['usersId'];
        }
        $this->load->model('usersModel');
        $user = $this->usersModel->getUser($id);
        $output['user'] = $user[0];
       
        
        if($output['user']['usersCategory']==='Buyer'){
        redirect('users/buyerhomepage');
        }
        if($output['user']['usersCategory']==='Seller'){
            redirect('users/sellerhomepage');
        }
    }

    public function sendEmail(){
        $email['protocol'] = 'smtp';
        $email['smtp_host'] = 'smtp.gmail.com';
        $email['smtp_user'] = "romeorojoo@gmail.com";
        $email['smtp_pass'] = "gkdfzcwdnhagftkl";
        $email['smtp_port'] = '587';
        $email['smtp_crypto'] = 'tls';
        $this->load->library('email', $email);
        $this->email->set_newline("\r\n");

        $this->email->subject('Testing 123');
        $this->email->to('romeorojoo@gmail.com');
        $this->email->from('romeorojoo@gmail.com');
        $this->email->message('testing testing 123 from codeigniter');
        $this->email->send();
        echo $this->email->print_debugger();
    }

    public function emailverify(){
        $data = $this->input->post();

        $pin=rand(100000,999999);

        $email['protocol'] = 'smtp';
        $email['smtp_host'] = 'smtp.gmail.com';
        $email['smtp_user'] = "romeorojoo@gmail.com";
        $email['smtp_pass'] = "gkdfzcwdnhagftkl";
        $email['smtp_port'] = '587';
        $email['smtp_crypto'] = 'tls';
        $this->load->library('email', $email);
        $this->email->set_newline("\r\n");

        $this->email->subject('Testing 123');
        $this->email->to('romeorojoo@gmail.com');
        $this->email->from('romeorojoo@gmail.com');
        $this->email->message($pin);
        $this->email->send();


        if($data===$pin){
            redirect('');
        }
        $this->load->view('users/emailverify');
    }
	
    public function editprofile($id=null){
		
    $user = $this->usersModel->getUser($_SESSION['usersId']);
	$output['user'] = $user[0];
		
		
		$data = array();
		$data = $this->input->post();
		/* $data['user_id'] = $_SESSION['user_id']; */
		/* print_r($data); */
        

		if(isset($data) && $data != null){
            $data['usersId'] = $_SESSION['usersId'];
			$this->usersModel->updateUser($data);
            redirect('users/profile');
		}
		$this->load->view('users/sellereditprofile', $output);
	}
    public function buyereditprofile($id=null){
		
        $user = $this->usersModel->getUser($_SESSION['usersId']);
        $output['user'] = $user[0];
            
            
            $data = array();
            $data = $this->input->post();
            /* $data['user_id'] = $_SESSION['user_id']; */
            /* print_r($data); */
            
    
            if(isset($data) && $data != null){
                $data['usersId'] = $_SESSION['usersId'];
                $this->usersModel->updateUser($data);
                redirect('users/profile');
            }
            $this->load->view('users/sellereditprofile', $output);
        }
	

}

    
   
