<?php
class User extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function get_user_by_acc_psw ($acc, $psw) {
    $this->db->where ('account', $acc);
    $this->db->where ('password', $psw);
    
    $query = $this->db->get ('users');
    $users = $query->result ();

    if (count ($users) > 0) {
      return $users[0];
    } else {
      return null;
    }
  }
}