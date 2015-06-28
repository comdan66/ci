<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

  public function index()
  {
    $this->load->helper('cookie');


    if ($this->input->cookie('is_login') === 'YES')
     $has_login = true;
    else
     $has_login = false;

    $this->load->model ('article');
    $articles = $this->article->get_articles ();

    $this->load->view('articles/index', array (
        'has_login' => $has_login,
        'articles' => $articles
      ));
  }
  public function add()
  {
    if ($this->input->cookie('is_login') === 'YES')
     $has_login = true;
    else
     $has_login = false;

    $this->load->view('articles/add', array (
        'has_login' => $has_login
      ));
  }
  public function add_post () {
    $title = $this->input->post ('title');

    $data = array (
        'title' => $title
      );

    $this->load->model('article');
    $this->article->add_article ($data);
    
    if ($this->input->cookie('is_login') === 'YES')
     $has_login = true;
    else
     $has_login = false;

    $this->load->view('articles/add_post', array (
        'has_login' => $has_login,
        'message' => '新增成功'
      ));
  }
  public function edit ($id = 0)
  {
    $this->load->model('article');
    $article = $this->article->get_article ($id);
    
    if (!$article)
      redirect ('articles');

    if ($this->input->cookie('is_login') === 'YES')
     $has_login = true;
    else
     $has_login = false;

    $this->load->view('articles/edit', array(
        'has_login' => $has_login,
        'article' => $article
      ));
  }
  public function edit_post ($id = 0)
  {
    $title = $this->input->post ('title');

    $this->load->model('article');
    $this->article->update_article ($id, array (
      'title' => $title
      ));

    if ($this->input->cookie('is_login') === 'YES')
     $has_login = true;
    else
     $has_login = false;

    $this->load->view('articles/edit_post', array (
        'has_login' => $has_login,
        'message' => '修改成功'
      ));
  }
  public function delete ($id = 0)
  {
    if ($this->input->cookie('is_login') === 'YES')
     $has_login = true;
    else
     $has_login = false;

    $this->load->model('article');
    $this->article->delete_article ($id);
    $this->load->view('articles/delete', array (
        'has_login' => $has_login,
        'message' => '刪除成功'
      ));
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */