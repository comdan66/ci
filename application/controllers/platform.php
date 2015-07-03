<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Platform extends CI_Controller {

  public function logout () {
    // 如果不是登入狀態的話
    if (!user ())
      redirect ();

    $message = '登出成功';
    
    // 設定登出
    user_login (0); // 參考 application/helpers/oa_helper.php

    $this->load->view('platform/logout', array (
        'message' => $message
      ));
  }
  public function login () {
    // 如果已經登入的話
    if (user ())
      redirect ();
    
    $this->load->view('platform/login');
  }

  public function login_post () {
    // 如果已經登入的話
    if (user ())
      redirect ();

    // 取得 post 過來的資料
    $account  = $this->input->post ('account');
    $password = $this->input->post ('password');
    
    // 進資料庫 比對是否有該 user
    $this->load->model ('user');
    $user = $this->user->get_user_by_acc_psw ($account, $password);

    // 有該位 user
    if ($user) {
      // 設定登入
      user_login ($user->id); // 參考 application/helpers/oa_helper.php
      $message = '登入成功';
    } else {
      $message = '登入失敗';
    }

    $this->load->view('platform/login_post', array (
        'message' => $message
      ));
  }
}