<?php

include "db.php";

$result = $conn->query("SELECT * FROM students");

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

header("Content-Type: application/json");
header("Content-Disposition: attachment; filename=students.json");

echo json_encode($data, JSON_PRETTY_PRINT);

?>