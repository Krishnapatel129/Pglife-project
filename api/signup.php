<?php
    include "db.php";
    header("content-Type:application/json");

    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $college = $_POST['college'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users(full_name,phone,email,password,college,gender) 
    VALUES ('$full_name','$phone','$email','$password','$college','$gender')";

    if(mysqli_query($conn, $sql)){
        echo "SignUp Sucessfully";
    }else {
        echo "error";
    }
?>