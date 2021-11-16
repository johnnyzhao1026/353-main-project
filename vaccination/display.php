
<?php require_once '../database.php';

$statement = $conn->prepare("select * from main.vaccination as vaccination where vaccination.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$vaccination = $statement->fetch(PDO::FETCH_ASSOC);


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show vaccination information</title>
</head>
<body>

<h1><?= $vaccination["id"] ?></h1>
<h2><?= $vaccination["type"] ?></h2>
<h2><?= $vaccination["status"] ?></h2>


    
</body>
</html>