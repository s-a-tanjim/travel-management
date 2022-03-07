<?php

session_start();

if(isset($_POST['submit'])){

  include_once 'db_config.php';

  $name= mysqli_real_escape_string($conn,$_POST['name']);
  $email= mysqli_real_escape_string($conn,$_POST['email']);
  $subject= mysqli_real_escape_string($conn,$_POST['subject']);
  $message= mysqli_real_escape_string($conn,$_POST['message']);
  
  //error handlers
  //check if inputs are empty
  if(empty($name) || empty($email) || empty($subject) || empty($message)){
    header("Location: ../contact.php?form=InvalidInput");
    exit();
  }
  else {
    $sql="INSERT INTO contact(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    header("Location: ../contact.php?form=success");
    exit();
  }

} else {
  header("Location: ../contact.php?form=error");
  exit();
}