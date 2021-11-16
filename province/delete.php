<?php require_once '../database.php';

$statement = $conn->prepare("delete from main.province where province.id = :id; ");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
header("Location: .");
?>