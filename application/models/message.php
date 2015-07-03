<?php
class Message extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function create ($data) {
    // 新增 messages
    $this->db->insert('messages', $data);
  }

  public function all () {
    // 使用 join 合併 messages、users 兩張表
    $this->db->select ('*');
    $this->db->from ('messages');
    $this->db->join ('users', 'messages.user_id = users.id');
    
    $query = $this->db->get ();
    $messages = $query->result ();
    return $messages;
  }
}