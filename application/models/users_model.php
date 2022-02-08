<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

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
			$data['usersPwd'] = sha1($data['usersPwd']);
			unset($data['usersRptPwd']);
			$this->db->insert($this->table, $data);
			return $this->db->insert_id();	
		}
	}
	
	public function loginUser($uid, $pwd){
		$this->db->where('usersUid', $uid)
			->where('usersPwd', sha1($pwd))
			->or_where('usersEmail', $uid)
			->where('usersPwd', sha1($pwd));

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
	public function getUser($id=null, $userCategory=null){
		if(isset($id) && $id != null){
			$this->db->where('usersId', $id);
		}
		if(isset($userCategory) && $userCategory != null){
			$this->db->where('usersCategory', $userCategory);
		}

		$query = $this->db->get($this->table);
		
		return $query->result_array();
	}

	public function addCategory($id, $category){
		$this->db->where('usersId', $id);
		$this->db->update($this->table, $category);
	}

	public function profilepic($data){
		$this->db->where('usersId', $data['usersId']);
		unset($data['usersId']);
		echo $data['profilepic'];
		$this->db->update($this->table, $data);
		return $this->db->insert_id();
	}

	public function updateUser($data){

		if($this->update_uidExist($data['usersUid'], $data['usersId'])){
			echo "uidE";
			return;
		}
		else if($this->update_emailExist($data['usersEmail'], $data['usersId'])){
			echo "emailE";
			return;
		
		}
		else{
			/* $data['user_pwd'] = password_hash($data['user_pwd'], PASSWORD_DEFAULT); */
			$this->db->where('usersId', $data['usersId']);
			unset($data['usersId']);

			$this->db->update($this->table, $data);	
		}
	}
	public function update_emailExist($email, $id){
		if(isset($email) && $email != null){
			$this->db->where('usersEmail', $email);
		}

		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) != 0 && $id != $return[0]['usersId']){
			return true;
		}

		return false;
	}
	public function update_uidExist($username, $id){
		if(isset($username) && $username != null){
			$this->db->where('usersUid', $username);
		}

		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) != 0 && $id != $return[0]['usersId']){
			return true;
		}

		return false;
	}

	public function getUserforMsg($receiver){
		$this->db->select('*');
		$where = "usersUid = '$receiver'";
		$this->db->where($where);
		$result = array();
		$result = $this->db->get($this->table);
		return $result->result_array();
	}
	
}