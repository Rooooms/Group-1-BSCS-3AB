<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsersModel extends CI_Model {

	private $table = "users";

	public function __construct(){
		parent::__construct();
	}

    public function createUser($data){
		
		if($this->uidExist($data['usersUid'])){
			echo "uidE";
			return;
		}
		else if($this->emailExist($data['usersEmail'])){
			echo "emailE";
			return;
		}
		else if($this->pwdMatch($data['usersPwd'], $data['usersRptPwd'])){
			echo "pwdM";
			return;
		}
		else{
			$data['usersPwd'] = md5($data['usersPwd']);
			unset($data['usersRptPwd']);
			$this->db->insert($this->table, $data);
		}
	}
	public function loginUser($uid, $pwd){
		$this->db->where('usersUid', $uid)
			->where('usersPwd', md5($pwd))
			->or_where('usersEmail', $uid)
			->where('usersPwd', md5($pwd));

		$query = $this->db->get($this->table);

		$return = $query->result_array();
		
		if(count($return) !== 0){
			return $return;
		}
		else{
		return false;
		}
	}
	
	public function uidExist($username){
		if(isset($username) && $username != null){
			$this->db->where('usersUid', $username);
		}

		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) != 0){
			return true;
		}

		return false;
	}
	public function emailExist($email){
		if(isset($email) && $email != null){
			$this->db->where('usersEmail', $email);
		}

		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) != 0){
			return true;
		}

		return false;
	}
	public function pwdMatch($password, $password_repeat){
		if($password !== $password_repeat){
			return true;
		}
		else{
			return false;
		}
	}

	
}