<?php
require 'database.php';
try {
    $ID = $_GET['id'];
    $sql = "SELECT * FROM superheroes WHERE id=:ID";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(":ID" => $ID));
    $superhero = $stmt->fetch();
    $_SESSION["superhero"] = $superhero;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$ID = $_GET['id'];
$sql = "UPDATE superheroes SET Title = :Title, Alignment = :Alignment, Gender = :Gender, Height = :Height, Weight = :Weight, Identity = :Identity, MaritalStatus = :MaritalStatus, Eyes = :Eyes, Hair = :Hair, PlaceOfBirth = :PlaceOfBirth, PlaceOfDeath = :PlaceOfDeath, Citizenship = :Citizenship, Occupation = :Occupation WHERE ID = $ID ";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":Title", $_POST['Title']);
$stmt->bindParam(":Alignment", $_POST['Alignment']);
$stmt->bindParam(":Gender", $_POST['Gender']);
$stmt->bindParam(":Height", $_POST['Height']);
$stmt->bindParam(":Weight", $_POST['Weight']);
$stmt->bindParam(":Identity", $_POST['Identity']);
$stmt->bindParam(":MaritalStatus", $_POST['MaritalStatus']);
$stmt->bindParam(":Eyes", $_POST['Eyes']);
$stmt->bindParam(":Hair", $_POST['Hair']);
$stmt->bindParam(":PlaceOfBirth", $_POST['PlaceOfBirth']);
$stmt->bindParam(":PlaceOfDeath", $_POST['PlaceOfDeath']);
$stmt->bindParam(":Citizenship", $_POST['Citizenship']);
$stmt->bindParam(":Occupation", $_POST['Occupation']);
$stmt->execute();

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
    <form method="post" id="login">
        <table class="table">
            <tr>
                <th>ID</th>
                <td><?php echo $ID; ?></td>
                <th>Title</th>
                <td><input value="<?php echo $_SESSION['superhero']['Title']; ?>" type="text" name="Title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <th>Alignment</th>
                <td><input value="<?php echo $_SESSION['superhero']['Alignment']; ?>" type="text" id="Alignment" name="Alignment" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                <th>Gender</th>
                <td><input value="<?php echo $_SESSION['superhero']['Gender']; ?>" type="text" id="Gender" name="Gender" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <th>Height</th>
                <td><input value="<?php echo $_SESSION['superhero']['Height']; ?>" type="text" id="Height" name="Height" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                <th>Weight</th>
                <td><input value="<?php echo $_SESSION['superhero']['Weight']; ?>" type="text" id="Weight" name="Weight" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <th>Identity</th>
                <td><input value="<?php echo $_SESSION['superhero']['Identity']; ?>" type="text" id="Identity" name="Identity" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                <th>Marital Status</th>
                <td><input value="<?php echo $_SESSION['superhero']['MaritalStatus']; ?>" type="text" id="MaritalStatus" name="MaritalStatus" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <th>Eyes</th>
                <td><input value="<?php echo $_SESSION['superhero']['Eyes']; ?>" type="text" id="Eyes" name="Eyes" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                <th>Hair</th>
                <td><input value="<?php echo $_SESSION['superhero']['Hair']; ?>" type="text" id="Hair" name="Hair" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <th>Place Of Birth</th>
                <td><input value="<?php echo $_SESSION['superhero']['PlaceOfBirth']; ?>" type="text" id="PlaceOfBirth" name="PlaceOfBirth" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                <th>Place Of Death</th>
                <td><inpu value="<?php echo $_SESSION['superhero']['PlaceOfDeath']; ?>"t type="text" id="PlaceOfDeath" name="PlaceOfDeath" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <th>Citizenship</th>
                <td><input value="<?php echo $_SESSION['superhero']['Citizenship']; ?>" type="text" id="Citizenship" name="Citizenship" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                <th>Occupation</th>
                <td><input value="<?php echo $_SESSION['superhero']['Occupation']; ?>" type="text" id="Occupation" name="Occupation" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <th>Sla de veranderingen op!</th>
                <td><input type="submit" class="btn btn-info" value="Opslaan"></td>
                <th>Terug naar de index</th>
                <td><a class="btn btn-info" href="superheroes_index.php" role="button">Home</a></td>
            </tr>
        </table>
    </form>
    <?php var_dump($superhero) ?>

</body>

</html>