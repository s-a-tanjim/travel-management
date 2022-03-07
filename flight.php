<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>flight booking</title>

	<link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


	<link rel = "stylesheet" href="footer.css">
	<link rel = "stylesheet" href="flight.css">
	<link rel = "stylesheet" href="navbar.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</head>
      
<header>
<?php
include_once './common/navbar.php';
?>

<div id="booking" class="section">
  <div class="section-center">
    <div class="container">
      <div class="row">
        <h1> FLIGHT BOOKING </h1>
        <div class="booking-form">
          <form id="flight_form" method="POST" action="./db/db_flight.php">
            <div class="form-group">
              <div class="form-checkbox">
                <label for="roundtrip">
                  <input type="radio" id="roundtrip" value="Round trip" name="flight-type">
                  <span></span>Roundtrip
                </label>
                <label for="one-way">
                  <input type="radio" id="one-way" value="One Way" name="flight-type">
                  <span></span>One way
                </label>
                <label for="multi-city">
                  <input type="radio" id="multi-city" value="Multi City" name="flight-type">
                  <span></span>Multi-City
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Name</span>
                  <input class="form-control" id="flight-name" name="name" type="text" placeholder="Enter Your Name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Email</span>
                  <input class="form-control" id="flight-email" type="text" name="email" placeholder="Enter your Email" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Flying from</span>
                  <input class="form-control" id="from" type="text" name="flying_from" placeholder="City or airport" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Flyning to</span>
                  <input class="form-control" id="to" type="text" name="flying_to" placeholder="City or airport" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <span class="form-label">Departing</span>
                  <input class="form-control" id="deperture" name="departing_date" type="date" required>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <span class="form-label">Returning</span>
                  <input class="form-control" id="return" name="returning_date" type="date" required>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <span class="form-label">Adults (18+)</span>
                  <select class="form-control" name="adult_count" id="adult">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <span class="form-label">Children (0-17)</span>
                  <select class="form-control" name="child_count" id="children">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <span class="form-label">Travel class</span>
                  <select class="form-control" name="travel_class" id="class">
                    <option value="Economy Class">Economy class</option>
                    <option value="Business Class">Business class</option>
                    <option value="First Class">First class</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-btn">
                  <button class="submit-btn" type="submit" name="submit" id="submit">Submit</button>
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