<?php
echo '<html>';
include_once './common/header.php';
include_once './common/navbar.php';
?>
<link rel="stylesheet" href="css/contact.css">

<div><br><br><br><br><br>
</div>
<main>
  <h1 style="text-align: center">We will be happy to hear from you</h1>
  <style>
    h1 {
      color: white;
    }
  </style>
  <div class="container contact">
    <div class="row">
      <div class="col-md-3">
        <div class="contact-info">
          <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
          <h2>Contact Us</h2>
          <h4>We would love to hear from you !</h4>
        </div>
      </div>
      <div class="col-md-9">
        <form class="contact-form" id="contact-form" action="./db/db_contact.php" method="POST">
          <div class="form-group">
            <label class="control-label col-sm-2" for="contact-name">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="contact-name" placeholder="Enter Name" name="name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="contact-email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="contact-email" placeholder="Enter email" name="email" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="subject">subject:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="subject" placeholder="Enter topic name" name="subject" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="comment">Message:</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment" name="message" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="submit" class="btn btn-default" id="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</main>
<div><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?php

include_once './common/js.php';
include_once './common/footer.php';

echo '</body>
</html>';