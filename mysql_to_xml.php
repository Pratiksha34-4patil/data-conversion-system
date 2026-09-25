<?php

include "db.php";

$result = $conn->query("SELECT * FROM students");

$xml = new SimpleXMLElement(
    '<?xml version="1.0" encoding="UTF-8"?><students></students>'
);

while ($row = $result->fetch_assoc()) {

    $student = $xml->addChild("student");

    $student->addChild("id", $row['id']);
    $student->addChild("name", $row['name']);
    $student->addChild("email", $row['email']);
    $student->addChild("course", $row['course']);
    $student->addChild("marks", $row['marks']);
}

header("Content-Type: application/xml");
header("Content-Disposition: attachment; filename=students.xml");

echo $xml->asXML();

?>