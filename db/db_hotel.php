<?php

if(isset($_POST['submit'])){

  include_once 'db_config.php';

  $f_name = mysqli_real_escape_string ( $conn , $_POST['first_name'] );
  $last_name = mysqli_real_escape_string ( $conn , $_POST['last_name'] );
  $phone_no = mysqli_real_escape_string ( $conn , $_POST['phone_no'] );
  $email = mysqli_real_escape_string ( $conn , $_POST['email'] );
  $from_date = mysqli_real_escape_string ( $conn , $_POST['from_date'] );
  $to_date = mysqli_real_escape_string ( $conn , $_POST['to_date'] );
  $guest_no = mysqli_real_escape_string ( $conn , $_POST['guest_no'] );
  $room_type = mysqli_real_escape_string ( $conn , $_POST['room_type'] );

  if(empty($f_name) || empty($last_name) || empty($phone_no) || empty($email) || empty($from_date) || empty($to_date) || empty($guest_no) || empty($room_type)){
    header("Location: ../hotel.php?form=EmptyForm");
    exit();
  } else {
    $sql = "INSERT INTO hotel_book VALUES ('$f_name','$last_name','$phone_no','$email','$from_date','$to_date','$guest_no','$room_type','pending')";
    $result = mysqli_query($conn,$sql);
    header("Location: ../hotel.php?submit=success");
    exit();
  }

} else {
  header("Location: ../hotel.php");
  exit();
}