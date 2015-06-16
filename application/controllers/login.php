<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
    $this->load->view('login');
  }

  public function post()
  {
    $account = $this->input->post ('account');
    $password = $this->input->post ('password');

    if ($account == 'user' && $password == '123')
      $message = '登入成功！';
    else
      $message = '登入失敗！';

    $this->load->view('post', array (
      'message' => $message
      ));
  }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */