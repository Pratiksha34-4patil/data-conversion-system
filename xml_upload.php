<!DOCTYPE html>
<html>
<head>
    <title>XML to MySQL</title>
</head>

<body>

    <h1>XML → MySQL</h1>

    <form action="xml_to_mysql.php" method="POST" enctype="multipart/form-data">

        <label>Select XML File:</label>
        <br><br>

        <input type="file" name="xml_file" accept=".xml" required>

        <br><br>

        <button type="submit">Import XML to MySQL</button>

    </form>

</body>
</html>