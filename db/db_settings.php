<?php
session_start();

if(isset($_POST['submit'])){

  include_once 'db_config.php';
  // mysqli_real_escape_string( , ) -> checks if input is risky for database
  $f_name = mysqli_real_escape_string ( $conn , $_POST['first_name'] );
  $last_name = mysqli_real_escape_string ( $conn , $_POST['last_name'] );
  $mobile = mysqli_real_escape_string ( $conn , $_POST['mobile_no'] );
  $address = mysqli_real_escape_string ( $conn , $_POST['address'] );
  $u_id = $_SESSION['u_id'];

  //Error handelers
  //To check for empty fields
  if(empty($f_name) || empty($last_name) || empty($mobile) || empty($address)){
    header("Location: ../settings.php?Form=EmptyForm");
    exit();
  }
  else {
    //Check if input characters are valid
    if(!preg_match("/^[a-zA-Z]*$/",$f_name) || !preg_match("/^[a-zA-Z]*$/",$last_name)){
      header("Location: ../settings.php?Form=invalidInput");
      exit();
    }
    else {
      $sql= "SELECT * FROM users WHERE user_id='$u_id'";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);

      if($resultCheck<1){
        header("Location: ../settings.php?Form=fatalError");
        exit();
      }
      else {
        //insert user into database
        $sql="UPDATE users SET first_name='$f_name', last_name='$last_name', mobile_no='$mobile', address='$address' WHERE user_id='$u_id'";
        mysqli_query($conn,$sql);

        $_SESSION['first_name']=$f_name;
        $_SESSION['last_name']=$last_name;
        $_SESSION['mobile_no']=$mobile;
        $_SESSION['address']=$address;
        
        header("Location: ../settings.php?Update=success");
        exit();
      }
      
    }
  }
}
else {
  header("Location: ../index.php");
  exit();
}