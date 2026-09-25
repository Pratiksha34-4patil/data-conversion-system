<?php

include "db.php";

if (isset($_FILES['json_file'])) {

    $file = $_FILES['json_file']['tmp_name'];

    $json = file_get_contents($file);
    $data = json_decode($json, true);

    if ($data === null) {
        die("Invalid JSON file");
    }

    foreach ($data as $student) {

        $name = $student['name'];
        $email = $student['email'];
        $course = $student['course'];
        $marks = $student['marks'];

        $sql = "INSERT INTO students
                (name, email, course, marks)
                VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $email, $course, $marks);
        $stmt->execute();
    }

    echo "<h2>JSON data imported successfully!</h2>";
}

?>