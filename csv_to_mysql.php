<?php

include "db.php";

if (isset($_FILES['csv_file'])) {

    $file = $_FILES['csv_file']['tmp_name'];

    $handle = fopen($file, "r");

    // Skip header row
    fgetcsv($handle);

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        $name = $data[0];
        $email = $data[1];
        $course = $data[2];
        $marks = $data[3];

        $sql = "INSERT INTO students
                (name, email, course, marks)
                VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $email, $course, $marks);
        $stmt->execute();
    }

    fclose($handle);

    echo "<h2>CSV data imported successfully!</h2>";
}

?>