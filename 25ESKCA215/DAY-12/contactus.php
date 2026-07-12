<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#eaf4ff;
}

nav{
    background:#fff;
    display:flex;
    justify-content:center;
    gap:60px;
    padding:20px;
    box-shadow:0 2px 10px rgba(0,0,0,0.15);
}

nav a{
    text-decoration:none;
    color:black;
    font-size:18px;
    font-weight:bold;
    transition:0.3s;
}

nav a:hover{
    color:#0d6efd;
    border-bottom:3px solid #0d6efd;
    padding-bottom:5px;
}

.container{
    width:90%;
    margin:50px auto;
    text-align:center;
}

.container h1{
    font-size:45px;
    color:#0d6efd;
    margin-bottom:15px;
}

.container p{
    color:#555;
    font-size:18px;
    margin-bottom:40px;
}

.cards{
    display:flex;
    justify-content:center;
    gap:30px;
    flex-wrap:wrap;
}

.card{
    width:300px;
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-10px);
}

.card h2{
    color:#0d6efd;
    margin-bottom:15px;
}

.card p{
    color:#666;
    line-height:28px;
}

.contact-form{
    width:450px;
    background:white;
    margin:50px auto;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
}

.contact-form input,
.contact-form textarea{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:16px;
}

.contact-form button{
    width:100%;
    padding:12px;
    background:#0d6efd;
    color:white;
    border:none;
    border-radius:8px;
    font-size:18px;
    cursor:pointer;
}

.contact-form button:hover{
    background:#084298;
}

footer{
    background:#111;
    color:white;
    text-align:center;
    padding:20px;
    margin-top:50px;
}

</style>

</head>
<body>

<nav>
    <a href="link.php">Link</a>
    <a href="aboutus.php">About Us</a>
    <a href="contactus.php">Contact</a>
</nav>

<div class="container">

<h1>Contact Us</h1>

<p>We'd love to hear from you. Feel free to contact us anytime.</p>

<div class="cards">

<div class="card">
<h2>📍 Address</h2>
<p>Udaipur, Rajasthan, India</p>
</div>

<div class="card">
<h2>📞 Phone</h2>
<p>+91 9876543210</p>
</div>

<div class="card">
<h2>📧 Email</h2>
<p>support@mywebsite.com</p>
</div>

</div>

</div>


<footer>
©2026 My Website | All Rights Reserved
</footer>

</body>
</html>
