<?php require_once '../database.php';

$statement = $conn->prepare("delete from main.infect where infect.id = :id; ");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
header("Location: ./infection.php");
?>