<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Platform extends CI_Controller {

  public function register()
  {
    if ($this->input->cookie('is_login') === 'YES')
      redirect ();

    $this->load->view('platform/register', array (
        'has_login' => false
      ));
  }
  public function register_post()
  {
    if ($this->input->cookie('is_login') === 'YES')
      redirect ();

    $name = $this->input->post ('name');
    $account = $this->input->post ('account');
    $password = $this->input->post ('password');

    if (!$name || !$name || !$name) {
      $message = '填寫的資料有誤，註冊失敗！';
    } else {
      $data = array (
          'account' => $account,
          'password' => $password,
          'name' => $name,
        );
      $this->load->model ('user');
      $this->user->add_user ($data);

      $message = '註冊成功！';
    }
    $this->load->view('platform/register_post', array (
        'has_login' => false,
        'message' => $message
      ));
  }
  public function login()
  {
    if ($this->input->cookie('is_login') === 'YES')
      redirect ();

    $this->load->view('platform/login', array (
        'has_login' => false
      ));
  }

  public function login_post()
  {
    $account = $this->input->post ('account');
    $password = $this->input->post ('password');
    
    $this->load->model ('user');

    $user = $this->user->get_user_by_acc_psw ($account, $password);

    if ($user) {
      $this->load->helper('cookie');

      $this->input->set_cookie ('is_login', 'YES', 86500);

      $message = "登入成功";
      $has_login = true;
    } else {
      $message ="登入失敗";
      $has_login = false;
    }

    $this->load->view('platform/login_post', array (
        'message' => $message,
        'has_login' => $has_login
      ));
  }
  public function logout()
  {

    $this->load->helper('cookie');
    $this->input->set_cookie ('is_login', null);

    $has_login = false;

    $this->load->view('platform/logout', array (
        'has_login' => $has_login
      ));
  }
}
