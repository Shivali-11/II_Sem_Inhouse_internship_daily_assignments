<?php

include ("db_connect.php");
include ("checkLoginError.php");
include ("header.php");
?>

<div class="container mt-5" style="max-width:400px;">
   <form action="" method="POST">
        <h3 class="mb-3">LOGIN</h3>

        

        <input type="email" class="form-control mb-3" name="email" placeholder="email">
    
        
    
        <input type="password" class="form-control mb-3" name="password" placeholder="password">
    
       
    
        <button type="submit" class="btn btn-primary w-100">LogIn</button>

    </form>
</div>

<?php
    include("footer.php");
?>
