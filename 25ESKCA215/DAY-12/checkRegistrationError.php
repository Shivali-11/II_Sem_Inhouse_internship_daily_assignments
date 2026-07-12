<?php
$error = "";
include ("db_connect.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){
   

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone_no = mysqli_real_escape_string($conn,$_POST['phone_no']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);

    if(empty($name) ){
        $error = "Name is required.";
        echo $error;
    }
    elseif($email=="" ){
        $error = "Email is required.";
        echo $error;
    }
    elseif(($phone_no=="" )|| strlen($phone_no)!=10){
        $error = "Phone no is Invalid.";
        echo $error;
    }
    elseif(($password=="" )|| strlen($password)<6){
        $error = "Password must be atleast 6 characters.";
        echo $error;
    }
    elseif(strtolower($password)==strtolower($name)){
        $error = " Make some strong password.";
        echo $error;
    }

    elseif($confirmpassword!= $password){
        $error = " Password is not matched.";
        echo $error;
    }
    

    else{
        $insertQuery="INSERT INTO user(name,email,phone_no,password) VALUES('$name','$email','$phone_no','$password')";

        $result= mysqli_query($conn,$insertQuery);

        if($result){
            header ("Location: success.php");
            exit();
        }else{
            echo "error occured while storing data";
            echo "error:" . mysqli_error($conn);
        }
        header("Location: success.php");
        exit();

    }
}
?>
