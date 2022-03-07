<?php

session_start();

if(isset($_POST['submit'])){

  include_once 'db_config.php';

  $email= mysqli_real_escape_string($conn,$_POST['email']);
  $pwd= mysqli_real_escape_string($conn,$_POST['password']);

  //error handlers

  //check if inputs are empty
  if(empty($email) || empty($pwd)){
    header("Location: ../login.php?login=InvalidInput");
    exit();
  }
  else {
    $sql="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck<1){
      header("Location: ../login.php?login=userNotFound");
      exit();
    }
    else {
      if($row = mysqli_fetch_assoc($result)){
        //de-hashing pw
        $hashedpwdcheck=password_verify($pwd,$row['password']);
        if($hashedpwdcheck==false){
          header("Location: ../login.php?login=userNotFound");
          exit();
        }
        elseif($hashedpwdcheck==true){
          // logged in user account
          //Storing data  in session from database
          $_SESSION['u_id']=$row['user_id'];
          $_SESSION['first_name']=$row['first_name'];
          $_SESSION['last_name']=$row['last_name'];
          $_SESSION['email']=$row['email'];
          $_SESSION['mobile_no']=$row['mobile_no'];
          $_SESSION['address']=$row['address'];
          $_SESSION['role']=$row['role'];
          header("Location: ../index.php?login=LoginSuccess");
          exit();
        }
      }
    }
  }

} else {
  header("Location: ../login.php?login=error");
  exit();
}