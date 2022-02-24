<?php
echo '<html>';
include_once './common/header.php';
include_once './common/navbar.php';
?>
<link rel="stylesheet" href="LOG.CSS">

<div class="container-fluid" id="sign_up">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <form class="form-container" action="db/db_register.php" method="POST">
        <h2>REGISTRATION FORM</h2>

        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="email-input">Email address</label>
          <input type="email" class="form-control" name="email" id="email-input" aria-describedby="emailHelp"
            placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="password-input">Password</label>
          <input type="password" class="form-control" name="password" id="password-input" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="mobile-no">Mobile Number</label>
          <input type="tel" id="mobile-no" name="mobile" class="form-control" placeholder="Type your Phone Number">
        </div>
        <div class="form-group">
          <label for="address">Adress</label>
          <input type="text" id="address" name="address" class="form-control" placeholder="Type Your addresss">
        </div>

        <br>
        <button type="submit" name="submit" class="btn btn-success btn-block" id="submit">Submit</button><br>

      </form>
    </div>
  </div>
  </section>
  <br>
  <br><br>
</div>

<?php

include_once './common/js.php';
include_once './common/footer.php';

echo '</body>
</html>';