<?php
session_start();
  include_once '../model/db.php';
  include_once '../includes/functions.php';
  $error = [];
  if(isset($_POST['register'])) {
    $username = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

    if(empty($username)) {
      array_push($error, "<p class='alert alert-danger'>Username is required</p>");
      header('location: ../register.php');
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($error, "<p class='alert alert-danger'>Email is invalid</p>");
      header('location: ../register.php');
    }elseif (empty($email)) {
      array_push($error, "<p class='alert alert-danger'>Email is required</p>");
      header('location: ../register.php');
    }elseif (strlen($password) <= 5) {
      array_push($error, "<p class='alert alert-danger'>Password is short</p>");
      header('location: ../register.php');
    }
    else{
        $hashed_password = md5($password);
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        $sql = mysqli_query($connection, $query);
        if($sql){
          header("Location: ../login.php");
        }else{
          echo "Please check your form inputs";
        }
      // }
    }
  }