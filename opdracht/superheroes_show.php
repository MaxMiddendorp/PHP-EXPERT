<?php
require 'database.php';

try {
    $ID = $_GET['id'];
    $sql = "SELECT * FROM superheroes WHERE id=:ID";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(":ID" => $ID));
    $superhero = $stmt->fetch();
    var_dump($pdo->errorInfo());
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <tr>
            <th>ID</th>
            <td><?php echo $superhero['ID']; ?></td>
            <th>Title</th>
            <td><?php echo $superhero['Title']; ?></td>
        </tr>
        <tr>
            <th>Alignment</th>
            <td><?php echo $superhero['Alignment']; ?></td>
            <th>Gender</th>
            <td><?php echo $superhero['Gender']; ?></td>
        </tr>
        <tr>
            <th>Height</th>
            <td><?php echo $superhero['Height']; ?></td>
            <th>Weight</th>
            <td><?php echo $superhero['Weight']; ?></td>
        </tr>
        <tr>
            <th>Identity</th>
            <td><?php echo $superhero['Identity']; ?></td>
            <th>Marital Status</th>
            <td><?php echo $superhero['MaritalStatus']; ?></td>
        </tr>
        <tr>
            <th>Eyes</th>
            <td><?php echo $superhero['Eyes']; ?></td>
            <th>Hair</th>
            <td><?php echo $superhero['Hair']; ?></td>
        </tr>
        <tr>
            <th>Place Of Birth</th>
            <td><?php echo $superhero['PlaceOfBirth']; ?></td>
            <th>PlaceOfDeath</th>
            <td><?php echo $superhero['PlaceOfDeath']; ?></td>
        </tr>
        <tr>
            <th>Citizenship</th>
            <td><?php echo $superhero['Citizenship']; ?></td>
            <th>Occupation</th>
            <td><?php echo $superhero['Occupation']; ?></td>
        </tr>
        <tr>
            <th></th>
            <td></td>
            <th>Terug naar Index</th>
            <td><a class="btn btn-info" href="superheroes_index.php" role="button">Terug</a></td>
        </tr>
    </table>
    <?php var_dump($superhero); ?>
</body>

</html>