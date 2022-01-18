<!doctype html>
<html lang="en">
<head>
    <title>Overview Netland</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Welkom op het Netland beheerders paneel</h1>

<?php

$host = 'localhost';
$db = 'netland';
$username = 'bit_academy';
$password = 'bit_academy';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    $con = new PDO($dsn, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($con) {
        $sql = "SELECT title, rating FROM series";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch();
    }
} catch (\PDOException $e) {
    echo $e->getMessage();
}

?>

<h2>Series</h2>

<table>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Rating</th>
        <th scope="col">Details</th>
    </tr>
    <tr>
        <td><span class="serieTitle"><?php echo $row[0]; ?></span></td>
        <td><span class="serieRating"><?php echo $row[1]; ?></span></td>
        <td><a href="series.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>
    </tr>
    <tr>
        <td><span class="serieTitle"><?php $row = $stmt->fetch();
                echo $row[0] ?></span></td>
        <td><span class="serieRating"><?php echo $row[1]; ?></span></td>
        <td><a href="series.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>
    </tr>
    <tr>
        <td><span class="serieTitle"><?php $row = $stmt->fetch();
                echo $row[0] ?></span></td>
        <td><span class="serieRating"><?php echo $row[1]; ?></span></td>
        <td><a href="series.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>
    </tr>
    <tr>
        <td><span class="serieTitle"><?php $row = $stmt->fetch();
                echo $row[0] ?></span></td>
        <td><span class="serieRating"><?php echo $row[1]; ?></span></td>
        <td><a href="series.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>
    </tr>
    <tr>
        <td><span class="serieTitle"><?php $row = $stmt->fetch();
                echo $row[0] ?></span></td>
        <td><span class="serieRating"><?php echo $row[1]; ?></span></td>
        <td><a href="series.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>
    </tr>
    <tr>
        <td><span class="serieTitle"><?php $row = $stmt->fetch();
                echo $row[0] ?></span></td>
        <td><span class="serieRating"><?php echo $row[1]; ?></span></td>
        <td><a href="series.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>
    </tr>
</table>

<h2>Films</h2>

<?php

try {
    $con = new PDO($dsn, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($con) {
        $sql = "SELECT title, length_in_minutes FROM movies";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch();
    }
} catch (\PDOException $e) {
    echo $e->getMessage();
}

?>

<table>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Duur</th>
        <th scope="col">Details</th>
    </tr>
    <tr>
        <td><span class="movieTitle"><?php echo $row[0]; ?></span></td>
        <td><span class="movieDuur"><?php echo $row[1]; ?></span></td>
        <td><a href="films.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>
    </tr>
    <tr>
        <td><span class="movieTitle"><?php $row = $stmt->fetch();
                echo $row[0] ?></span></td>
        <td><span class="movieDuur"><?php echo $row[1]; ?></span></td>
        <td><a href="films.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>

    </tr>
    <tr>
        <td><span class="movieTitle"><?php $row = $stmt->fetch();
                echo $row[0] ?></span></td>
        <td><span class="movieDuur"><?php echo $row[1]; ?></span></td>
        <td><a href="films.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>
    </tr>
    <tr>
        <td><span class="movieTitle"><?php $row = $stmt->fetch();
                echo $row[0] ?></span></td>
        <td><span class="movieDuur"><?php echo $row[1]; ?></span></td>
        <td><a href="films.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>
    </tr>
    <tr>
        <td><span class="movieTitle"><?php $row = $stmt->fetch();
                echo $row[0] ?></span></td>
        <td><span class="movieDuur"><?php echo $row[1]; ?></span></td>
        <td><a href="films.php?title=<?php echo $row[0] ?>"><span>Bekijk details</span></a></td>
    </tr>
</table>

</body>
</html>
