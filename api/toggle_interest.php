<?php
header('Content-Type: application/json');

include "db.php";

$property_id = $_POST['property_id'] ?? 0;

if (!$property_id) {
    echo json_encode([
        "status" => "error",
        "message" => "Missing property_id"
    ]);
    exit;
}


$sql = "INSERT INTO interests(property_id) VALUES($property_id)";
mysqli_query($conn, $sql);

// get updated count
$result = mysqli_query($conn, "SELECT COUNT(*) as count FROM interests WHERE property_id=$property_id");
$row = mysqli_fetch_assoc($result);

echo json_encode([
    "status" => "success",
    "count" => $row['count']
]);