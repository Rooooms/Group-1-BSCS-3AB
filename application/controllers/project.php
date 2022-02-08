<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
    public function uniqidReal($lenght = 13) {
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

    public function addProject($id=null){
        if(isset($_SESSION['usersId'])){
            if($id===null){
                $id=$_SESSION['usersId'];
            }

        $this->load->model('usersModel');
        $result=$this->usersModel->getUser($id);

        $output['id']=$result[0]['usersId'];
        
        $data = array();
		$data = $this->input->post();
        
		if(isset($data) && $data != null){
            if(isset($_FILES) && $_FILES!= null){
               
                $file = $_FILES['serviceImage'];
                $fileName = $_FILES['serviceImage']['name'];
                $fileTmpName = $_FILES['serviceImage']['tmp_name'];
                $fileSize = $_FILES['serviceImage']['size'];
                $fileError = $_FILES['serviceImage']['error'];
                $fileType = $_FILES['serviceImage']['type'];
                
    
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                
                $allowed = array('jpg', 'jpeg', 'png' , 'jfif');
                
                if(in_array($fileActualExt, $allowed)){
                    if($fileError === 0){
                        if($fileSize < 500000){
                            $uniqID = $this->uniqidReal();
                            $fileNewName = $uniqID.".".$fileActualExt;
                            $fileDestination = APPPATH."./php/public/uploads/serviceImage/".$fileNewName;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            //$serviceImage = base64_encode(file_get_contents(addslashes($serviceImage)));
                            //$data['serviceImage'] = $serviceImage;
                            //$_SESSION['info']['serviceImage'] = $data['serviceImage'];
                            $_SESSION['info']['serviceImage'] = base_url()."public/uploads/serviceImage/".$fileNewName;
                            
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

        $this->load->model('projectModel');
        $this->projectModel->addProject($data, $_SESSION['info'], $id);

        redirect('users/sellerhomepage');
    }
    $this->load->view('users/seller/addProject');
}
    }

    public function portfolio($id=null){
        if(isset($_SESSION['usersId'])){
            if($id===null){
                $id=$_SESSION['usersId'];
            }

        $this->load->model('usersModel');
        $result=$this->usersModel->getUser($id);

        $output['id']=$result[0]['usersId'];
        
        $data = array();
		$data = $this->input->post();
        
		if(isset($data) && $data != null){
            if(isset($_FILES) && $_FILES!= null){
               
                $file = $_FILES['projectImage'];
                $fileName = $_FILES['projectImage']['name'];
                $fileTmpName = $_FILES['projectImage']['tmp_name'];
                $fileSize = $_FILES['projectImage']['size'];
                $fileError = $_FILES['projectImage']['error'];
                $fileType = $_FILES['projectImage']['type'];
                
    
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                
                $allowed = array('jpg', 'jpeg', 'png' , 'jfif');
                
                if(in_array($fileActualExt, $allowed)){
                    if($fileError === 0){
                        if($fileSize < 500000){
                            $uniqID = $this->uniqidReal();
                            $fileNewName = $uniqID.".".$fileActualExt;
                            $fileDestination = APPPATH."../public/uploads/projectImage/".$fileNewName;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            //$serviceImage = base64_encode(file_get_contents(addslashes($serviceImage)));
                            //$data['serviceImage'] = $serviceImage;
                            //$_SESSION['info']['serviceImage'] = $data['serviceImage'];
                            $_SESSION['info']['projectImage'] = base_url()."public/uploads/projectImage/".$fileNewName;
                            
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

        $this->load->model('portfolio_model');
        $this->portfolio_model->addPortfolio($data, $_SESSION['info'], $id);
        redirect('users/sellerhomepage');

        
    }
    $this->load->view('users/seller/portfolio');
}
    }
    
    public function orderprocess($id){
        
        $this->load->model('projectModel');
        $data=$this->projectModel->getProject($id);
        for ($i=0; $i<count($data);$i++ ){
            $result=$this->usersModel->getUser($data[$i]['userId']);
            $data[$i]['seller']=$result[0]['usersName'];
            $data[$i]['sellerpic']=$result[0]['profilepic'];
            $data[$i]['selleruid']=$result[0]['usersUid'];
        }
        $output['data']=$data[0];

        $this->load->view('browse/browseProj', $output);
    }

    public function orderform($id){

        $this->load->model('projectModel');
        $result=$this->projectModel->getProject($id);
        $output['data']=$result[0];
    
        $data=array();
        $data=$this->input->post();
        if(isset($data) && $data != null){
        $this->load->model('checkout_model');
		$this->checkout_model->addCheckout($data);
        redirect('users/buyerhomepage');

        
    }
    $this->load->view('users/orderform', $output);
    }


}