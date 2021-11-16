
<?php require_once '../database.php';

$statement = $conn->prepare("select * from main.person as person where person.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$person = $statement->fetch(PDO::FETCH_ASSOC);


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show person information</title>
</head>
<body>

<h1><?= $person["id"] ?></h1>
<h2><?= $person["first_name"] ?></h2>
<h2><?= $person["last_name"] ?></h2>

<h2><?= $person["birth"] ?></h2>
<h2><?= $person["address"] ?></h2>
    
</body>
</html>