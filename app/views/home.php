<?php require '_layout/header.php' ?>

<div id="wrap">
  <div id="login-button">
    <a href="<?php echo BASE_URL ?>login" class="btn btn-danger">登录</a>
  </div>
  <div id="head">
    <div class="logo">
      <img id="logo" src="<?php echo BASE_URL.'images/logo.png' ?>" alt="logo">
    </div>
    <div class="title">
      <h2>干掉拖延症</h2>
    </div>
  </div>
  <div class="content">
    <div id="box">
      <div id="add">
        <input id="add-input" type="text" class="form-control" placeholder="添加任务">
      </div>
      <div id="list" class="list-group">
      </div>
    </div>
  </div>
  <div id="foot">
    &copy;<?php echo date('Y') ?> <a href="http://killtyz.com">KillTYZ</a> | <a href="https://github.com/johnlui/KillTYZ">Github Repo</a>
    <br>Powered by <a href="http://tinylara.com">TinyLara</a>
  </div>
  <div style="display: none;"><script src="http://v1.cnzz.com/stat.php?id=1253509300&web_id=1253509300" language="JavaScript"></script></div>
</div>

<?php require '_layout/footer.php' ?>