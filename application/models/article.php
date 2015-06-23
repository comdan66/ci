<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Model {

  function __construct()
  {
      parent::__construct();
  }

  public function get_articles ()
  {
    $query = $this->db->get('articles');
    return $query->result();
  }
  public function add_article ($data)
  {
    $this->db->insert('articles', $data);
  }
  public function get_article ($id)
  {
    $query = $this->db->limit(1)
                      ->offset(0)
                      ->where('id', $id)
                      ->get('articles');

    $result = $query->result ();

    if (count ($result) > 0)
      return $result[0];
    else
      return null;
  }
  public function update_article ($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('articles', $data); 
  }
  public function delete_article ($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('articles');
  }
}