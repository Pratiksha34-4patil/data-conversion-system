<?php

include "db.php";

if (isset($_FILES['xml_file'])) {

    $file = $_FILES['xml_file']['tmp_name'];

    $xml = simplexml_load_file($file);

    if ($xml === false) {
        die("Invalid XML file");
    }

    foreach ($xml->student as $student) {

        $name = (string)$student->name;
        $email = (string)$student->email;
        $course = (string)$student->course;
        $marks = (int)$student->marks;

        $sql = "INSERT INTO students
                (name, email, course, marks)
                VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $email, $course, $marks);
        $stmt->execute();
    }

    echo "<h2>XML data imported successfully!</h2>";
}

?>