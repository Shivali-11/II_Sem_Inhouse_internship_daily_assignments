<?php
session_start();
$error = "";

$email = "";
$password = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
   


    $email = mysqli_real_escape_string($conn,$_POST['email']);
    
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    

   
    if($email=="" ){
        $error = "Email is required.";
        echo $error;
    }
    
    elseif(($password=="" )|| strlen($password)<6){
        $error = "Password must be atleast 6 characters.";
        echo $error;
    }
    
    else{
        $selectQuery= "SELECT * FROM user WHERE email='$email' and password='$password' ";
        $result= mysqli_query($conn,$selectQuery);

        $user = mysqli_fetch_assoc($result);

        if($user){

            

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            
            header ("Location: dashboard.php"); 
            exit();
        }else{
            echo "Invalid Credentials";
            echo "error:" . mysqli_error($conn);
        }
        
    }

}
?>
