<?php require_once '../database.php';

$statement = $conn->prepare("delete from main.vaccination where vaccination.id = :id; ");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
header("Location: .");
?>