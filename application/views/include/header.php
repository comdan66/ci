<style type="text/css">
  body {
    text-align: center;
  }
  .header {
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(39, 40, 34, .5);
  }
  .header a {
    font-size: 20px;
    color: rgba(72, 98, 163, 1);
    text-decoration: none;
    margin-right: 10px;
  }
  .header a:hover {
    text-decoration: underline;
  }
</style>

<div class='header'>
  <a href='<?php echo site_url ()?>'>首頁</a>
  <?php
    if (user ()) { ?>
      <a href='<?php echo site_url ('platform/logout')?>'>登出</a>
  <?php
    } else { ?>
      <a href='<?php echo site_url ('platform/login')?>'>登入</a>
  <?php
    } ?>
</div>