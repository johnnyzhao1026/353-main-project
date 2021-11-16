
<?php require_once '../database.php';

$statement = $conn->prepare("select * from main.age as age where age.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$employee = $statement->fetch(PDO::FETCH_ASSOC);


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show employee information</title>
</head>
<body>

<h1><?= $employee["id"] ?></h1>
<h2><?= $employee["max_age"] ?></h2>
<h2><?= $employee["min_age"] ?></h2>


</body>
</html>


