<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style type="text/css">
      .container {
        width: 200px;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>

  <div class='header'>
    <a href='<?php echo site_url ();?>'>首頁</a>
    <a href='<?php echo site_url ('login');?>'>登入</a>
  </div>

  <hr/>

  <div class='container'>
    <?php echo $message;?>
  </div>

  </body>
</html>