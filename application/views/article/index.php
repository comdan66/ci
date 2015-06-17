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
    <a href='<?php echo site_url ();?>'>首頁</a>
    -
    <a href='<?php echo site_url ('articles');?>'>文章列表</a>
    -
    <a href='<?php echo site_url ('articles/add');?>'>新增文章</a>
    <hr/>
    
    <?php
      if ($articles) {
        foreach ($articles as $article) {
          echo $article->title . "<br/>";
        }
      }
    ?>
  </body>
</html>