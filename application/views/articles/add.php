<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      .container {
      }
    </style>
  </head>
  <body>
    <?php
    include APPPATH . 'views/header.php'
    ?>

    <form action='<?php echo site_url ('articles/add_post');?>' method='post'>
      <input type='text' name='title' value=''/>
      <button type='submit'>新增</button>
    </form>

  </body>
</html>