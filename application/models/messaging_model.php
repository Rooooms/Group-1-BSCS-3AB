<?php
class Messaging_model extends CI_model{
	
	private $table = "messages";


	public function addMessage($data, $sender) {
        $data['dateCreated'] = time();
		$data['messageStatus'] = "Sent";
		$data['senderId'] = $sender;
        $this->db->insert($this->table, $data);
		$rec = $data['receiverId'];

        return $rec;
	}

	public function viewMessage($data, $sender, $receiver){

		$data['dateCreated'] = time();
		$data['messageStatus'] = "Sent";
		$data['senderId'] = $sender;
		$data['receiverId'] = $receiver;
        $this->db->insert($this->table, $data);

	}

	public function showMessage($sender, $receiver){

		$this->db->select('*');
		$where = "senderId = '$sender' AND receiverId = '$receiver' OR 
		senderId = '$receiver' AND receiverId = '$sender'";
		$this->db->where($where);
		$result = array();
		$result = $this->db->get($this->table);
		return $result->result_array();

	}

	public function getInbox($user){
		$this->db->select('*');
		$where = "receiverId = '$user'";
		$this->db->where($where);
		$this->db->order_by('dateCreated', 'DESC');
		$result = array();
		$result = $this->db->get($this->table);
		return $result->result_array();
	}

	public function getLastMessage($sender){
		$this->db->select('*');
		$session_id = $_SESSION['usersId'];
		$where = "senderId = '$session_id' AND receiverId = '$sender' OR 
		senderId = '$sender' AND receiverId = '$session_id'";
		$this->db->where($where);
		$this->db->order_by('dateCreated', 'DESC');
		$result = $this->db->get($this->table)->result_array();
		return $result;
	}

}


?>