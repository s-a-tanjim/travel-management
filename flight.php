<?php
echo '<html>';
include_once './common/header.php';
include_once './common/navbar.php';
?>
<link rel="stylesheet" href="flight.css">


<div id="booking" class="section">
  <div class="section-center">
    <div class="container">
      <div class="row">
        <h1> FLIGHT BOOKING </h1>
        <div class="booking-form">
          <form id="flight_form">
            <div class="form-group">
              <div class="form-checkbox">
                <label for="roundtrip">
                  <input type="radio" id="roundtrip" name="flight-type">
                  <span></span>Roundtrip
                </label>
                <label for="one-way">
                  <input type="radio" id="one-way" name="flight-type">
                  <span></span>One way
                </label>
                <label for="multi-city">
                  <input type="radio" id="multi-city" name="flight-type">
                  <span></span>Multi-City
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Name</span>

                  <input class="form-control" id="flight-name" type="text" placeholder="Enter Your Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Email</span>
                  <input class="form-control" id="flight-email" type="text" placeholder="Enter your Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Flying from</span>
                  <input class="form-control" id="from" type="text" placeholder="City or airport">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Flyning to</span>
                  <input class="form-control" id="to" type="text" placeholder="City or airport">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <span class="form-label">Departing</span>
                  <input class="form-control" id="deperture" type="date" required>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <span class="form-label">Returning</span>
                  <input class="form-control" id="return" type="date" required>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <span class="form-label">Adults (18+)</span>
                  <select class="form-control" id="adult">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <span class="form-label">Children (0-17)</span>
                  <select class="form-control" id="children">
                    <option value="">0</option>
                    <option value="">1</option>
                    <option value="">2</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <span class="form-label">Travel class</span>
                  <select class="form-control" id="class">
                    <option>Economy class</option>
                    <option>Business class</option>
                    <option>First class</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-btn">
                  <button class="submit-btn" id="submit">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

include_once './common/js.php';
include_once './common/footer.php';

echo '</body>
</html>';