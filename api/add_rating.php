<?php
include "db.php";

$property_id = $_POST['property_id'];
$rating = $_POST['rating'];

$sql = "INSERT INTO ratings(property_id, rating) VALUES($property_id, $rating)";
mysqli_query($conn, $sql);

echo "success";
?>