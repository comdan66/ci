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

    <table border="1">
      <thead>
        <tr>
          <th>
            ID
          </th>
          <th>
            Title
          </th>
          <th>
            Edit
          </th>
          <th>
            Delete
          </th>
        </tr>
      </thead>
      <tbody>
      <?php
        if ($articles) {
          foreach ($articles as $article) { ?>
            <tr>
              <th>
                <?php echo $article->id;?>
              </th>
              <th>
                <?php echo $article->title;?>
              </th>
              <th>
                <a href='<?php echo site_url ('articles/edit/' . $article->id);?>'>編輯</a>
              </th>
              <th>
                <a href='<?php echo site_url ('articles/delete/' . $article->id);?>'>刪除</a>
              </th>
            </tr>
      <?php
          }
        }
      ?>
      </tbody>
    </table>

  </body>
</html>