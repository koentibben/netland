<!doctype html>
<html lang="en">
<head>
    <title>Movie details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Movie details</h2>

<?php
$row = queryFromMoviesTable('summary');
echo $row[0];

function queryFromMoviesTable($column)
{
    $host = 'localhost';
    $db = 'netland';
    $username = 'bit_academy';
    $password = 'bit_academy';
    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
    try {
        $con = new PDO($dsn, $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($con) {
            $sql = "SELECT " . $column . " FROM movies WHERE title = \"" . $_GET['title'] . "\"";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        }
    } catch (\PDOException $e) {
        echo $e->getMessage();
    }
}

?>
<br>
<br>
<table>
    <tr>
        <th scope="col">Information</th>
        <th scope="col">Information</th>
    </tr>
    <tr>
        <td><span>Datum van uitkomst</span></td>
        <td><span><?php $row = queryFromMoviesTable('released_at');
                echo $row[0] ?></span></td>
    </tr>
    <tr>
        <td><span>Land van uitkomst</span></td>
        <td><span><?php $row = queryFromMoviesTable('country_of_origin');
                echo $row[0] ?></span></td>
    </tr>
    <tr>
        <td><span>Duur</span></td>
        <td><span><?php $row = queryFromMoviesTable('length_in_minutes');
                echo $row[0] . " minuten" ?></span></td>
    </tr>
</table>
</body>
</html>
