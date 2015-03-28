<?php require VIEW_BASE_PATH.'_layout/header.php' ?>

<div id="wrap">
  <div id="login">
    <div class="alert alert-info" role="alert">
      We do not verify the email.
    </div>
    <?php
    if ( array_key_exists('validate_errors', $_COOKIE) ) {
      echo '<div class="alert alert-danger" role="alert"><ul>';
      foreach (json_decode($_COOKIE['validate_errors']) as $error) {
        echo "<li>$error</li>";
      }
      echo '</ul></div>';
      setcookie('validate_errors', '', time() - 86400, '/');
    }
    ?>
    <form class="form-horizontal" action="<?php echo BASE_URL.'api/1/login' ?>" method="POST">
      <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-8">
          <button class="btn btn-lg btn-success" onclick="signIn();">Sign in</button>
          <button class="btn btn-lg btn-default" onclick="signUp();">Sign up</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
function signIn() {

}
</script>

<?php require VIEW_BASE_PATH.'_layout/footer.php' ?>