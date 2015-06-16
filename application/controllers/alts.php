<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alts extends CI_Controller {

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
    $alts = array(
      '文章1',
      '文章2',
      '文章3',
      '文章4',
      '文章5',
      '文章6',
      );
    $this->load->view('alts_index', array (
        'alts' => $alts
      ));
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */