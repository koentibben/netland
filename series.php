<!doctype html>
<html lang="en">
<head>
    <title>Serie details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2><?php echo $_GET['title'] ?></h2>

<?php

$row = queryFromSeriesTable('summary');
echo $row[0];

function queryFromSeriesTable($column)
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
            $sql = "SELECT " . $column . " FROM series WHERE title = \"" . $_GET['title'] . "\"";
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
        <td><span>Awards</span></td>
        <td><span><?php $row = queryFromSeriesTable('has_won_awards');
        if ($row[0] === 0) {
            echo "Nee";
        } else {
            echo "Ja";
        } ?></span></td>
    </tr>
    <tr>
        <td><span>Seasons</span></td>
        <td><span><?php $row = queryFromSeriesTable('seasons');
                echo $row[0] ?></span></td>
    </tr>
    <tr>
        <td><span>Country</span></td>
        <td><span><?php $row = queryFromSeriesTable('country');
                echo $row[0] ?></span></td>
    </tr>
    <tr>
        <td><span>Language</span></td>
        <td><span><?php $row = queryFromSeriesTable('spoken_in_language');
                echo $row[0] ?></span></td>
    </tr>
    <tr>
        <td><span>Rating</span></td>
        <td><span><?php $row = queryFromSeriesTable('rating');
                echo $row[0] ?></span></td>
    </tr>
</table>
</body>
</html>
