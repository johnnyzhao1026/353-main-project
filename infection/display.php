<?php require_once '../database.php';

$statement = $conn->prepare("select * from main.infect as infect where infect.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$infect = $statement->fetch(PDO::FETCH_ASSOC);


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show infect information</title>
</head>
<body>

<h1><?= $infect["id"] ?></h1>
<h2><?= $infect["num"] ?></h2>
<h2><?= $infect["i_medcard"] ?></h2>

<h2><?= $infect["infection_date"] ?></h2>

 
</body>
</html>