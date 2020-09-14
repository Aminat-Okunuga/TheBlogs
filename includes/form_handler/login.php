<?php
session_start();
// $mysqli = new mysqli("localhost","root","","blog") or die("Could not connect");
include_once '../db.php';
include_once '../functions.php';

if(isset($_POST['login_submit'])) {
  $email = test_input(mysqli_real_escape_string($connection, $_POST['email']));
  $password = test_input(mysqli_real_escape_string($connection, $_POST['password']));

  $sql = mysqli_query($connection, "SELECT * FROM users WHERE email='me@me.com'");
  $row = mysqli_fetch_assoc($sql); 
  // $db_email = $row['email'];
  // $db_pwd = $row['password'];
  // $profile_pic = $row['profile_pic'];

  // $rehashpwd = md5($pwd);

  // if($email === $db_email && $db_pwd === $rehashpwd) {
    if(($email === "me@email.com") && ($pwd === "password")) {
    $_SESSION['userLogged'] = $email;
    // $_SESSION['profile_pic'] = $profile_pic;
   
    header("Location: ../../admin/index.php");
    // var_dump();
  }else{
    // $_SESSION['log_email'] = $email;
    // header("Location: ../../cms-admin.php?wrong_entries");
    echo "Aminat";
  }
}
