<?php
include "db.php";

header('Content-Type: application/json');

if (!isset($_GET['property_id'])) {
    echo json_encode([]);
    exit;
}

$property_id = intval($_GET['property_id']);

$sql = "SELECT a.name, a.icon 
        FROM amenities a
        JOIN property_amenities pa 
        ON a.id = pa.amenity_id
        WHERE pa.property_id = $property_id";

$result = mysqli_query($conn, $sql);

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>