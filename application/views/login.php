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
      input[type="text"], input[type="password"] {
      }
      hr {
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
    <form action='<?php echo site_url ('login/post');?>' method='post'>
      <input type='text' name='account' value=''/>
      <input type='password' name='password' value=''/>
      <hr/>
      <button type='submit'>登入</button>
    </form>
  </div>

  </body>
</html>