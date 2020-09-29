<?php
session_start();
  include_once '../model/db.php';
  include_once '../includes/functions.php';
  $error = [];

if($_SERVER["REQUEST_METHOD"] != "POST"){
  $error = "Invalid request format, please try again";
}

if(isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
    
  if(empty($email)){
    echo "Email cannot be empty";
  }
  if(empty($password)){
    echo "Password cannot be empty";
  } else{

      $email = test_input($_POST['email']);
      $password = test_input($_POST['password']);
      $rehashpwd = md5($password);
      $result = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
      $num = mysqli_num_rows($result);

      if($num == 1){
        header('location: ../admin/index.php');
      }else{
          $error ="Invalid login details";
      // header("location: ../admin/index.php");
        }
    }
}
