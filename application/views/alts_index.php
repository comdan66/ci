<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style type="text/css">
      .alt {
        padding: 10px;
        border-bottom: 1px solid rgba(39, 40, 34, 1);
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
    <?php 
      foreach ($alts as $alt) {
        echo "<div class='alt'>" . $alt . "</div>";
      }
    ?>
  </div>

  </body>
</html>