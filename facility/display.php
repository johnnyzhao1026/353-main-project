<?php require_once '../database.php';

$statement = $conn->prepare("select * from main.facility as facility where facility.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$facility = $statement->fetch(PDO::FETCH_ASSOC);


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show facility information</title>
</head>
<body>

<h1><?= $facility["id"] ?></h1>
<h2><?= $facility["FacilityName"] ?></h2>
<h2><?= $facility["FacilityWebaddress"] ?></h2>
    
</body>
</html>