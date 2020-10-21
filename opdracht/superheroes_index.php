<?php
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
            <h1>Superheroes Index</h1>

            <?php
            try {
                $sql = "SELECT * FROM superheroes";
                $result = $pdo->query($sql);
                if ($result->rowCount() > 0) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>Title</th>";
                    echo "<th>Alignment</th>";
                    echo "<th></th>";
                    echo "</tr>";
                    while ($row = $result->fetch()) {
                        echo "<tr>";
                        echo "<td>" . $row['Title'] . "</td>";
                        echo "<td>" . $row['Alignment'] . "</td>";
                        echo "<td>" . $row['Alignment'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    unset($result);
                }
            } catch (PDOException $e) {
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }
            ?>
</body>

</html>