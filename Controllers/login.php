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
    // var_dump($_POST['email']);
    // var_dump($_POST['password']);
    // print_r($_POST); exit();

    if(empty($email)){
      echo "Email cannot be empty";
    }
    if(empty($password)){
      echo "Password cannot be empty";
    }

    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //   $error = "Invalid email address";
    //   // array_push($error, "<p class='alert alert-danger'>Email is invalid</p>");
    //   // header('location: ../login.php');
    // }elseif (empty($email)) {
    //   $error = "Email address cannot be empty";
    //   // array_push($error, "<p class='alert alert-danger'>Email is required</p>");
    //   header('location: ../login.php');
    // }elseif (empty($password)) {
    //   $error = "Password cannot be empty";
    //   // array_push($error, "<p class='alert alert-danger'>Password is short</p>");
    //   // header('location: ../login.php');
    // }
    else{
      
    // $username = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

    

    // $sql = mysqli_query($connection, "SELECT * FROM users WHERE email= '$email'");
    // $row = mysqli_fetch_assoc($sql); 
    // $db_email = $row['email'];
    // $db_pwd = $row['password'];

    $rehashpwd = md5($password);

    // if(($email === $db_email)) {
    //   // if(($email === "me@email.com") && ($pwd === "password")) {
    //   $_SESSION['email'] = $email;
    //   // $_SESSION['profile_pic'] = $profile_pic;
    
    //   header("Location: ../admin/index.php");
    //   // var_dump();
    // }else{
    //   $_SESSION['log_email'] = $email;
    //   header("Location: ../login.php");
    // } 

    // $result = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    $result = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
    // var_dump($_POST['email']); exit();
    $num = mysqli_num_rows($result);

    if($num == 1){
      echo "Yayy! Welcome";
      header('location: ../admin/index.php');

    }else{
    // session_start();
    // $_SESSION['email'] = $email;
    $error ="Invalid login details";
    // header("location: ../admin/index.php");
    }
  }
}
