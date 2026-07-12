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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>

    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header class="bg-light border-bottom">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">

            <!-- Profile Photo -->
            <img src="uploads/<?= $user['profile']; ?>"
                 alt="Profile"
                 width="70"
                 height="70"
                 style="border-radius:50%; object-fit:cover;">

            <!-- Navbar -->
            <nav>
                <ul class="nav" style="font-size:16px; font-weight:bold; gap:80px;">

                    <
                    <li class="nav-item">
                        <a href="Link.php" class="nav-link text-dark">Link</a>
                    </li>

                    <li class="nav-item">
                        <a href="aboutus.php" class="nav-link text-dark">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="contactus.php" class="nav-link text-dark">Contact Us</a>
                    </li>

                </ul>
            </nav>

            <a href="logout.php" class="btn btn-outline-danger">Logout</a>

        </div>
    </div>
</header>
