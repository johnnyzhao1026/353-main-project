<?php require_once '../database.php';

$statement = $conn->prepare("delete from main.facility where facility.id = :id; ");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
header("Location: .");
?>