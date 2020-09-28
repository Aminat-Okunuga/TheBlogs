<?php
$error = "";

?>
<html lang="en">
  <head>
    <title>TheBlogs &mdash; Aminat Okunuga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


<form action="Controllers/register.php" method="post" role="form" class="form" autocomplete="off">
  <h3>Sign Up</h3>
  <!-- <p class="alert alert-danger">*<?=$error;?></p> -->
  <div class="form-group">
    <!-- <label>Username</label> -->
    <input type="text" name="username" placeholder="Username" class="form-control">
  </div>
  <div class="form-group">
    <!-- <label>Email</label> -->
    <input type="email" name="email" placeholder="E-Mail" class="form-control">
  </div>
  <div class="form-group">
    <!-- <label>Password</label> -->
    <input type="password" name="password" placeholder="Password" placeholder="Password" class="form-control">
  </div>
  <div class="form-group">
    <input type="submit" name="register" value="Continue" class="btn btn-primary">
  </div>
  <span>Already have an account?<a href="login.php"> Login here</a></span>
</form>
