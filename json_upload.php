<!DOCTYPE html>
<html>
<head>
    <title>JSON to MySQL</title>
</head>

<body>

    <h1>JSON → MySQL</h1>

    <form action="json_to_mysql.php" method="POST" enctype="multipart/form-data">

        <label>Select JSON File:</label>
        <br><br>

        <input type="file" name="json_file" accept=".json" required>

        <br><br>

        <button type="submit">Import JSON to MySQL</button>

    </form>

</body>
</html>