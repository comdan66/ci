<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function create () {
    // 沒有登入的話
    if (!user ())
      redirect ();
		
    // 取得 post 的東西
		$content = $this->input->post ('content');

    // 沒有輸入內容的話
		if (!$content) 
      redirect ();

    // 新增
		$this->load->model ('message');

		$data = array (
        'user_id' => user ()->id,
        'content' => $content,
        'created_at' => date ('Y-m-d H:i:s')
      );
		$this->message->create ($data);

    redirect ();
	}
	public function index () {
    // 取得所有訊息
		$this->load->model ('message');
		$messages = $this->message->all ();

		$this->load->view('welcome_message', array (
				'messages' => $messages
			));
	}
}