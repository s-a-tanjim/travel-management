<!DOCTYPE HTML>
<html>

<head>
  <title>Hotel Booking</title>
  <!-- Meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link href="css/style.css" rel='stylesheet' type='text/css' />

</head>

<body>
<?php
include_once './common/navbar.php';
?>

<!--background-->
<h1> HOTEL BOOKING</h1>
<div class="bg-agile">
  <div class="book-appointment">
    <h2>Booking Now</h2>
    <div class="book-form agileits-login">
      <form action="db/db_hotel.php" method="post" id="hotel_form">
        <div class="agileits_reservation_grid">
          <div class="phone_email">
            <div class="form-text">
              <i class="fa fa-user" aria-hidden="true"></i>
              <input type="text" name="first_name" placeholder="First name" required>
            </div>
          </div>
          <div class="phone_email phone_email1">
            <div class="form-text">
              <i class="fa fa-user" aria-hidden="true"></i>

              <input type="text" id="hotel-name" placeholder="Last name" name="last_name" required>
            </div>
          </div>

          <div class="phone_email">
            <div class="form-text">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <input type="text" name="phone_no" id="hotel-phone" placeholder="Phone number" required>
            </div>
          </div>
          <div class="phone_email phone_email1">
            <div class="form-text">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <input type="email" id="hotel-email" name="email" placeholder="Email" required>

            </div>
          </div>

          <div class="span1_of_1 phone_email1">
            <div class="book_date">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              <input id="datepicker" name="from_date" type="text" placeholder="Arrival Date" width="260" required>

            </div>
          </div>
          <div class="span1_of_1 phone_email">
            <div class="book_date">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              <input id="datepicker1" name="to_date" type="text" placeholder="Departure Date" width="260" required>

            </div>
          </div>
          <div class="span1_of_1">
            <!-- start_section_room -->
            <div class="section_room">
              <i class="fa fa-users" aria-hidden="true"></i>
              <select id="country" name="guest_no">
                <option value="-1">No.of guests</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
            </div>
          </div>
          <div class="span1_of_1 phone_email1">
            <!-- start_section_room -->
            <div class="section_room">
              <i class="fa fa-h-square" aria-hidden="true"></i>
              <select id="country1" name="room_type">
                <option value="-1">Room Type</option>
                <option value="Single Room">Single Room</option>
                <option value="Double Room">Double Room</option>
                <option value="Suit Room">Suit Room</option>

              </select>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <input type="submit" id="submit" name="submit" value="Book Now">
        <div class="clear"></div>
      </form>
    </div>

  </div>
</div>
<div> <br> <br><br> <br></div>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script>
  $('#datepicker1').datepicker({
    uiLibrary: 'bootstrap4'
  });
  $('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
  });
</script>
<script type="application/x-javascript">
  addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
  }, false);

  function hideURLbar() {
    window.scrollTo(0, 1);
  }
</script>

<script src="./app.js"></script>
<?php

include_once './common/js.php';
include_once './common/footer.php';

echo '</body>
</html>';