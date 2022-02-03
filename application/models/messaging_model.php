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
	public function getMessages($messageId = null, $userId = null, $userType = null) {
        if(isset($messageId) && $messageId != null) {
            $this->db->where('messageid', $messageId);
        }
		if(isset($userType) && $userType != null) {
		    if($userType == "sender") {
                $this->db->where('senderId', $userId);
            } else {
                $this->db->where('receiverId', $userId);
            }
		}

		$query = $this->db->get($this->table);

		return $query->result_array();
	}

	public function addMessage($data) {
        $data['dateCreated'] = time();
		$data['messageStatus'] = "Sent";
		$data['messageId'] = 1; // temporary messageid (replace with uniqid command)
        $this->db->insert($this->table, $data);

        return $this->db->insert_id();
	}
	
	public function updateMessage($data) {

		$this->db->where('id', $data['id']);
		unset($data['id']);
		$this->db->update($this->table, $data);

		return true;
	}

	public function updateMessageStatus($messageId, $status) {
		$this->db->where('messageStatus', $status);
		$this->db->update($this->table, array('id' => $messageId));

		return true;
	}

	/*
	public function viewMessageSent{
		if(isset($_GET["receiverId"]))
            $chats = mysqli_query($connect, "SELECT * FROM messages where (FromUser = '".$_SESSION["usersId"]."' AND
                ToUser = '".$_GET["receiverId"]."') OR (FromUser = '".$_GET["receiverId"]."' AND
                ToUser = '".$_SESSION["usersId"]."')")
            or die("Failed to query database".mysql_error());
        else
            $chats = mysqli_query($connect, "SELECT * FROM messages where (FromUser = '".$_SESSION["usersId"]."' AND
                ToUser = '".$_SESSION["receiverId"]."') OR (FromUser = '".$_SESSION["receiverId"]."' AND
                ToUser = '".$_SESSION["usersId"]."')")
            or die("Failed to query database".mysql_error());


            while($chat = mysqli_fetch_assoc($chats)){
                if($chat["FromUser"] == $_SESSION["usersId"])
                    echo "$chat["Message"].";                              
                else
                    echo ".$chat["Message"].";
	}
	*/

}


?>