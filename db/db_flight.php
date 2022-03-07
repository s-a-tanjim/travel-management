<?php

if(isset($_POST['submit'])){

  include_once 'db_config.php';

  $name = mysqli_real_escape_string ( $conn , $_POST['name'] );
  $flight_type = mysqli_real_escape_string ( $conn , $_POST['flight-type'] );
  $email = mysqli_real_escape_string ( $conn , $_POST['email'] );
  $flying_from = mysqli_real_escape_string ( $conn , $_POST['flying_from'] );
  $flying_to = mysqli_real_escape_string ( $conn , $_POST['flying_to'] );
  $departing_date = mysqli_real_escape_string ( $conn , $_POST['departing_date'] );
  $returning_date = mysqli_real_escape_string ( $conn , $_POST['returning_date'] );
  $adult_count = mysqli_real_escape_string ( $conn , $_POST['adult_count'] );
  $child_count = mysqli_real_escape_string ( $conn , $_POST['child_count'] );
  $travel_class = mysqli_real_escape_string ( $conn , $_POST['travel_class'] );

  if(empty($name) || empty($flight_type) || empty($email) || empty($flying_from) || empty($flying_to) || empty($departing_date) || empty($returning_date) || empty($adult_count) || empty($travel_class)){
    header("Location: ../flight.php?form=EmptyForm");
    exit();
  } else {
    $sql = "INSERT INTO flight_book VALUES ('$name','$email','$flight_type','$flying_from','$flying_to','$departing_date','$returning_date','$adult_count','$child_count','$travel_class','pending')";
    $result = mysqli_query($conn,$sql);
    header("Location: ../flight.php?submit=success");
    exit();
  }

} else {
  header("Location: ../flight.php");
  exit();
}