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
    
    <form action='<?php echo site_url ('articles/edit_post/' . $article->id);?>' method='post'>
      <input type='text' name='title' value='<?php echo $article->title;?>'/>
      <button type='submit'>修改</button>
    </form>

  </body>
</html>