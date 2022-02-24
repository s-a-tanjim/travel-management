<?php
echo '<html>';
include_once './common/header.php';
include_once './common/navbar.php';
?>

<link rel="stylesheet" href="css/settings.css">
<div>
  <br><br><br><br><br><br><br><br>
</div>
<p>Profile</p>
<style>
  p {
    text-align: center;
    font-size: 65px;
  }
</style>
<div class="container contact">
  <div class="row">
    <div class="col-md-3">
      <div class="contact-info">

        <h2>Update Profile</h2>
        <h4>We are glad to have you our customer!</h4>
      </div>
    </div>
    <div class="col-md-9">
      <form class="contact-form" id="update-form" action="db/db_settings.php" method="POST">
        <div class="form-group">
          <label class="control-label col-sm-2" for="first-name">First Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="first-name" placeholder="Update your first name"
              name="first_name" value="<?php echo $_SESSION['first_name'] ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="last-name">Last Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="last-name" placeholder="Update your last name" name="last_name"
              value="<?php echo $_SESSION['last_name'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Email address"
              value="<?php echo $_SESSION['email'] ?>" name="email" disabled>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="account-phone">Phone:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="account-phone" placeholder="Update mobile number"
              name="mobile_no" value="<?php echo $_SESSION['mobile_no'] ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="account-address">Address:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="account-address" placeholder="Update your address"
              name="address" value="<?php echo $_SESSION['address'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" class="btn btn-default" id="update">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<div>
  <br><br><br><br><br><br><br><br><br><br><br>
</div>
<div>
  <br><br><br><br><br><br><br><br>
</div>

<?php

include_once './common/js.php';
include_once './common/footer.php';

echo '</body>
</html>';