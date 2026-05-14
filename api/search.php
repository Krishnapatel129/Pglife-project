<?php
include "db.php";

$city = isset($_GET['city']) ? $_GET['city'] : "";

$sql = "SELECT * FROM properties 
        WHERE name LIKE '%$city%' 
        OR address LIKE '%$city%'";

$result = mysqli_query($conn, $sql);

$data = [];

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);
?>