<?php

if(isset($_POST['submit'])){

  include_once 'db_config.php';
  // mysqli_real_escape_string( , ) -> checks if input is risky for database
  $f_name = mysqli_real_escape_string ( $conn , $_POST['first_name'] );
  $last_name = mysqli_real_escape_string ( $conn , $_POST['last_name'] );
  $email = mysqli_real_escape_string ( $conn , $_POST['email'] );
  $pwd = mysqli_real_escape_string ( $conn , $_POST['password'] );
  $mobile = mysqli_real_escape_string ( $conn , $_POST['mobile'] );
  $address = mysqli_real_escape_string ( $conn , $_POST['address'] );

  //Error handelers
  //To check for empty fields
  if(empty($f_name) || empty($last_name) || empty($email) || empty($pwd) || empty($mobile) || empty($address)){
    header("Location: ../register.php?Signup=EmptyForm");
    exit();
  }
  else {
    //Check if input characters are valid
    if(!preg_match("/^[a-zA-Z]*$/",$f_name) || !preg_match("/^[a-zA-Z]*$/",$last_name)){
      header("Location: ../register.php?Signup=invalidInput");
      exit();
    }
    else {
      //check mail
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?Signup=invalid_email");
        exit();
      }
      else {
        $sql= "SELECT * FROM users WHERE email='$email'";
        $result=mysqli_query($conn, $sql);
        $resultCheck=mysqli_num_rows($result);

        if($resultCheck>0){
          header("Location: ../register.php?Signup=alreadyHaveAnAccount");
          exit();
        }
        else {
          //Hashing password
          $hashpwd=password_hash($pwd,PASSWORD_DEFAULT);
          //insert user into database
          $sql="INSERT INTO users(first_name, last_name, email, password, mobile_no, address) VALUES ('$f_name','$last_name','$email','$hashpwd','$mobile','$address')";
          mysqli_query($conn,$sql);
          
          
          header("Location: ../index.php?Signup=success");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: ../register.php");
  exit();
}