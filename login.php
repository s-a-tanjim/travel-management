<?php
echo '<html>';
include_once './common/header.php';
include_once './common/navbar.php';
?>
<link rel="stylesheet" href="log.css">

<div class="container-fluid" id="login">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <form class="form-container" action="db/db_login.php" method="POST">
        <h1>Login form</h1>
        <div class="form-group">
          <label for="email-input">Email address</label>
          <input type="email" class="form-control" name="email" id="email-input" aria-describedby="emailHelp"
            placeholder="Enter email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="password-input">Password</label>
          <input type="password" class="form-control" name="password" id="password-input" placeholder="Password" required>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button><br>
        <div class="signup">
          <a href="./register.php" style="color:#fff">Signup?</a>
        </div>
      </form>

    </div>
  </div>

  <br>
  <br><br>
</div>

<?php

include_once './common/js.php';
include_once './common/footer.php';

echo '</body>
</html>';