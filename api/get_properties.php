<?php
include "db.php";

$gender = isset($_GET['gender']) ? $_GET['gender'] : 'all';
$sort = isset($_GET['sort']) ? $_GET['sort'] : '';

$sql = "SELECT * FROM properties WHERE 1 ";

if ($gender != "all") {
    $sql .= "AND gender = '$gender' ";
}

if ($sort == "high") {
    $sql .= "ORDER BY rent DESC ";
} elseif ($sort == "low") {
    $sql .= "ORDER BY rent ASC ";
}

$result = mysqli_query($conn, $sql);

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;  
}

echo json_encode($data);
?>