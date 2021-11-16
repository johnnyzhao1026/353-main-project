<?php require_once '../database.php';

$statement = $conn->prepare("delete from main.employee where employee.id = :id; ");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
header("Location: .");
?>


