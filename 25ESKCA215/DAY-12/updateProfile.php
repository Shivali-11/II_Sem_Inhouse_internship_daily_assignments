<?php
/*include("db_connect.php");
include("dashboardheader.php");
include("dashboardverticalcontent.php");
include("checkUpdateProfileError.php");

?>

<div class="container mt-5" style="max-width:400px;">
   <form action="" method="POST">
        <h3 class="mb-3">Update Profile</h3>

        <input type="text" class="form-control mb-3" name="name" placeholder="Name">

        <input type="email" class="form-control mb-3" name="email" placeholder="email">
    
        <input type="text" class="form-control mb-3" name="phone_no" placeholder="phone no.">

        <input type="file" name="myFile" accept="image/*" required><br>
        <button type="submit">Upload</button>   
        
        <button type="submit" class="btn btn-primary w-100">Update Profile</button>

    </form>
</div>
<?php

include("dashboardFooter.php");
include("footer.php");*/
session_start();

include("dashboardVerticalContent.php");
include("db_connect.php");
include("dashboardHeader.php");

if(isset($_POST['update'])){

    $newname = mysqli_real_escape_string($conn, $_POST['newname']);
    $userid = $_SESSION['user_id'];

    $folder = "uploads/";

    if(!is_dir($folder)){
        mkdir($folder, 0777, true);
    }

    $profile = "";

    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){

        $allowedTypes = ["jpg","jpeg","png","gif","webp","avif"];
        $extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));

        $maxSize = 20 * 1024 * 1024;

        
        if(!in_array($extension,$allowedTypes)){
            die("Only JPG, JPEG, PNG, GIF and WEBP files are allowed.");
        }

        if($_FILES['file']['size'] > $maxSize){
            die("File size should be less than 20MB.");
        }

        $profile = time()."_".rand(1000,9999).".".$extension;
        $targetFile = $folder.$profile;

        if(!move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
            die("Image upload failed.");
        }

        $query = "UPDATE user SET name='$newname', profile='$profile' WHERE id='$userid'";

    }else{

        $query = "UPDATE user SET name='$newname' WHERE id='$userid'";
    }

    if(mysqli_query($conn,$query)){
        $_SESSION['user_name'] = $newname;
        echo "<script>alert('Profile Updated Successfully'); window.location='dashboard.php';</script>";
    }else{
        echo "Error : ".mysqli_error($conn);
    }
}
?>

<div class="container mt-5" style="max-width:400px;">

    <form action="" method="post" enctype="multipart/form-data">

        <h3 class="mb-3">Update Profile</h3>

        <input type="text"
               class="form-control mb-3"
               name="newname"
               value="<?= $_SESSION['user_name']; ?>"
               required>

        <input type="file"
               name="file"
               class="form-control mb-3">

        <button type="submit"
                name="update"
                class="btn btn-primary w-100">
            Update
        </button>

    </form>

</div>

<?php
include("footer.php");

?>
