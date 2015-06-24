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

    <form action='<?php echo site_url ('articles/edit_post/' . $article->id);?>' method='post'>
      <input type='text' name='title' value='<?php echo $article->title;?>'/>
      <button type='submit'>修改</button>
    </form>

  </body>
</html>