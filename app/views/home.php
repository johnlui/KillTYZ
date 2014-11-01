<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title ?></title>
  <link href="http://libs.baidu.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo BASE_URL.'css/main.css' ?>">

  <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://libs.baidu.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL.'js/main.js' ?>"></script>
</head>
<body>
  <div id="wrap">
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
          <a href="#" class="list-group-item">
            <span class="check checked"></span>
            <span class="value checked">
              KillTYZ 基础 Todo-List 功能实现
            </span>
            <span class="delete glyphicon glyphicon-trash"></span>
          </a>
        </div>
      </div>
    </div>
    <div id="foot">
      &copy;<?php echo date('Y') ?> <a href="http://killtyz.com">KillTYZ</a> | <a href="https://github.com/johnlui/KillTYZ">Github Repo</a>
      <br>Powered by <a href="http://tinylara.com">TinyLara</a>
    </div>
    <div style="display: none;"><script src="http://v1.cnzz.com/stat.php?id=1253509300&web_id=1253509300" language="JavaScript"></script></div>
  </div>
</body>
</html>