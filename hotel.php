<?php
echo '<html>';
include_once './common/header.php';
include_once './common/navbar.php';
?>
 <link href="css/style.css" rel='stylesheet' type='text/css' />
<!--background-->
<h1> HOTEL BOOKING</h1>
<div class="bg-agile">
  <div class="book-appointment">
    <h2>Booking Now</h2>
    <div class="book-form agileits-login">
      <form action="#" method="post" id="hotel_form">
        <div class="agileits_reservation_grid">
          <div class="phone_email">
            <div class="form-text">
              <i class="fa fa-user" aria-hidden="true"></i>
              <input type="text" name="Name" placeholder="First name" required="">
            </div>
          </div>
          <div class="phone_email phone_email1">
            <div class="form-text">
              <i class="fa fa-user" aria-hidden="true"></i>

              <input type="text" id="hotel-name" placeholder="Last name" name="lname" required="">

            </div>
          </div>

          <div class="phone_email">
            <div class="form-text">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <input type="text" name="Phone no" id="hotel-phone" placeholder="Phone number" required="">
            </div>
          </div>
          <div class="phone_email phone_email1">
            <div class="form-text">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <input type="email" id="hotel-email" name="email" placeholder="Email" required="">

            </div>
          </div>


          <div class="span1_of_1 phone_email1">
            <div class="book_date">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              <input id="datepicker" name="Text" type="text" placeholder="Arrival Date" width="260" required="">

            </div>
          </div>
          <div class="span1_of_1 phone_email">
            <div class="book_date">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              <input id="datepicker1" name="Text" type="text" placeholder="Departure Date" width="260" required="">

            </div>
          </div>
          <div class="span1_of_1">
            <!-- start_section_room -->
            <div class="section_room">
              <i class="fa fa-users" aria-hidden="true"></i>
              <select id="country">
                <option value="">No.of guests</option>
                <option value="">1</option>
                <option value="">2 </option>
                <option value="">3</option>
                <option value="">4 </option>
                <option value="">5 </option>
                <option value="">6 </option>
              </select>
            </div>
          </div>
          <div class="span1_of_1 phone_email1">
            <!-- start_section_room -->
            <div class="section_room">
              <i class="fa fa-h-square" aria-hidden="true"></i>
              <select id="country1">
                <option value="">Room Type</option>
                <option value="">Single Room</option>
                <option value="">Double Room </option>
                <option value="">Suit Room</option>

              </select>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <input type="submit" id="submit" value="Book Now">
        <div class="clear"></div>
      </form>
    </div>

  </div>
</div>
<div> <br> <br><br> <br></div>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script>
  $('#datepicker, #datepicker1').datepicker({
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

<?php

include_once './common/js.php';
include_once './common/footer.php';

echo '</body>
</html>';