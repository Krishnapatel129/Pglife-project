<?php
include "db.php";

header('Content-Type: application/json');

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo json_encode(["error" => "ID missing"]);
    exit;
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM properties WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
} else {
    echo json_encode(["error" => "Property not found"]);
}
?>