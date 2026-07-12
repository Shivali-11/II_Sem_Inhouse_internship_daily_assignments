<?php
session_start();
include ("dashboardHeader.php");


?>



<div class="container mt-5" style="max-width:400px;">
   <form action="checkUpdateError.php" method="POST" autocomplete="off">
        <h3 class="mb-3">Update Password</h3>

        

        <input type="password" class="form-control mb-3" name="oldpassword" placeholder="OldPassword">

        <input type="password" class="form-control mb-3" name="newpassword" placeholder="NewPassword">
    
        <input type="password" class="form-control mb-3" name="confirmpassword" placeholder="ConfirmPassword">
    
       
    
        <button type="submit" class="btn btn-primary w-100">Update</button>

    </form>
</div>


<?php

include ("footer.php");

?>
