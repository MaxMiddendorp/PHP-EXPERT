<?php

require 'database.php';
$ID = $_GET['id'];
$sql = "DELETE FROM superheroes WHERE ID = :ID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":ID", $ID);
$stmt->execute();
header('location: superheroes_index.php');
?>