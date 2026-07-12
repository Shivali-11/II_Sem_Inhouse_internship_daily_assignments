<?php
include ("header.php");
include ("checkRegistrationError.php");
?>

<div class="container mt-5" style="max-width:400px;">
   <form action="" method="POST">
        <h3 class="mb-3">Register</h3>

        <input type="text" class="form-control mb-3" name="name" placeholder="Name">

        <input type="email" class="form-control mb-3" name="email" placeholder="email">
    
        <input type="text" class="form-control mb-3" name="phone_no" placeholder="phone no.">
    
        <input type="password" class="form-control mb-3" name="password" placeholder="password">
    
        <input type="password" class="form-control mb-3" name="confirmpassword" placeholder="confirm password">
    
        <button type="submit" class="btn btn-primary w-100">Register</button>

    </form>
</div>

<?php
    include("footer.php");
?>
