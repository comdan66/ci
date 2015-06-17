<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function get_articles ()
    {
      $query = $this->db->get('article');
      return $query->result();
    }
    public function add_article ($data)
    {
      $this->db->insert('article', $data);
    }
}