<?php
    $conn= new mysqli("localhost","root","","pglifedb",3307);

if ($conn->connect_error){
    die("connection failed".$conn-> connect_error);
   
}
?>