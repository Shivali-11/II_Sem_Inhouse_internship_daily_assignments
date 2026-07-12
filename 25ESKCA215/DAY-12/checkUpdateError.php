<?php
/*session_start();
include("db_connect.php");

$error = "";


$newPassword="";
$confirmPassword="";
$oldPassword="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $newPassword = mysqli_real_escape_string($conn, $_POST["newPassword"]);
    $confirmPassword = mysqli_real_escape_string($conn,$_POST["confirmPassword"]);
    $oldPassword = mysqli_real_escape_string($conn,$_POST["oldPassword"]);
    
    

    if( $newPassword == "" || $oldPassword == ""||$confirmPassword == ""){
        $error="all field are required.";
        echo $error;
        }
        elseif($newPassword != $confirmPassword){
            $error= "password does not match";
            echo $error;
        }
  
    
        
        
        else{
         $selectQuery="SELECT * From users WHERE id= ' " . $_SESSION['users_id'] . " ' "; 

        $result= mysqli_query($conn,$selectQuery);
        $users=mysqli_fetch_assoc($result);
        
           
          
        if( $users && $users["password"] ==$oldPassword){
            $updateQuery ="UPDATE users SET password= '$newPassword' where id= ' " . $_SESSION['users_id'] . " ' " ;
         
             $result= mysqli_query($conn,$updateQuery);
           
            header("Location: updateSuccess.php");
            exit();
            
         }elseif($users){
            echo "Old Password does not matched";
         }
         
         else{
            echo "Invalid Credentials";
            echo "error:" . mysqli_error($conn);
         }
        
    
        
}}*/
    

session_start();
include("db_connect.php");

$error = "";

$newpassword = "";
$oldpassword = "";
$confirmpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
    $oldpassword = mysqli_real_escape_string($conn, $_POST['oldpassword']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);

    if ($newpassword == "" || $oldpassword == "" || $confirmpassword == "") {

        echo "All fields are required.";

    } elseif ($newpassword != $confirmpassword) {

        echo "Passwords do not match.";

    } else {

        $user_id = $_SESSION['user_id'];

        $selectQuery = "SELECT * FROM user WHERE ID='$user_id'";
        $result = mysqli_query($conn, $selectQuery);

        $user= mysqli_fetch_assoc($result);

        if ($user && $user['password'] == $oldpassword) {

            $updateQuery = "UPDATE user SET password='$newpassword' WHERE id='$user_id'";

            if (mysqli_query($conn, $updateQuery)) {

                header("Location: updateSuccess.php");
                exit();

            } else {

                echo mysqli_error($conn);

            }

        } elseif ($user) {

            echo "Old password does not match.";

        } else {

            echo "User not found.";

        }
    }
}
?>


