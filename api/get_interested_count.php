<?php
include "db.php";

if (!isset($_POST['property_id'])) {
    echo json_encode(["error" => "property_id missing"]);
    exit;
}

$property_id = $_POST['property_id'];

$sql = "SELECT COUNT(*) AS total FROM interested WHERE property_id = $property_id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo json_encode($row);
?>