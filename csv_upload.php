<!DOCTYPE html>
<html>
<head>
    <title>CSV to MySQL</title>
</head>

<body>

    <h1>CSV → MySQL</h1>

    <form action="csv_to_mysql.php" method="POST" enctype="multipart/form-data">

        <label>Select CSV File:</label>
        <br><br>

        <input type="file" name="csv_file" accept=".csv" required>

        <br><br>

        <button type="submit">Import CSV to MySQL</button>

    </form>

</body>
</html>