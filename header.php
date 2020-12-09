<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Francisco Lucena</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">Home</a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="blogs.php">Blogs</a>
    </li>
    <?php
    if(isset($_SESSION["useruid"])){
  echo "<li class='nav-item'>
      <a class='nav-link' href='profile.php'>Profile Page</a>
    </li>";
  echo "<li class='nav-item'>
      <a class='nav-link' href='includes/logout.inc.php'>Log out</a>
      </li>";
    }else{
  echo "<li class='nav-item'>
      <a class='nav-link' href='signup.php'>Sign up</a>
    </li>";
  echo "<li class='nav-item'>
      <a class='nav-link' href='login.php'>Log in</a>
      </li>";
    }
    ?>
  </ul>
</nav>
