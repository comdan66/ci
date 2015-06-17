<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -  
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in 
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->model('article');
    $articles = $this->article->get_articles ();

    $this->load->view('article/index', array (
        'articles' => $articles
      ));
  }
  public function add()
  {
    $this->load->view('article/add');
  }
  public function add_post () {
    $title = $this->input->post ('title');

    $data = array (
        'title' => $title
      );

    $this->load->model('article');
    $this->article->add_article ($data);
    
    $this->load->view('article/add_post');
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */