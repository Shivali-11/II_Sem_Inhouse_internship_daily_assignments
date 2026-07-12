<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

include("db_connect.php");

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit();
}

$id = $_SESSION['user_id'];

$result = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
$user = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration Form</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="https://cdn.pixabay.com/photo/2022/08/22/02/05/logo-7402513_640.png"alt="logo" height="80" width="80" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 " style="gap:80px; font-weight:bold;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="link.php">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="aboutus.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="contactus.php">Contact Us</a>
        </li>
        
        
      </ul>
      <form class="d-flex">
        <a href="logout.php" class="btn btn-outline-danger">logout </a>
        
      </form>
    </div>
  </div>
</nav>
