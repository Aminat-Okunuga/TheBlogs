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

<form action="Controllers/login.php" method="post" role="form" class="form">
  <h3>Login</h3>
  <!-- <p class="alert alert-danger">*<?php echo $error; ?></p> -->
  <div class="form-group">
    <label>Email</label>    
    <input type="email" name="email" placeholder="E-Mail" class="form-control">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" placeholder="Password" placeholder="Password" class="form-control">
  </div>
  <div class="form-group">
    <input type="submit" name="login" value="Login" class="btn btn-primary">
  </div>
  <span>Don't have an account?<a href="register.php"> Register here</a></span>
</form>
