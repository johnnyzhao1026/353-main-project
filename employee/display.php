
<?php require_once '../database.php';

$statement = $conn->prepare("select * from main.employee as employee where employee.id = :id");
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
<h2><?= $employee["EID"] ?></h2>
<h2><?= $employee["first_name"] ?></h2>
<h2><?= $employee["last_name"] ?></h2>

<h2><?= $employee["birth"] ?></h2>
<h2><?= $employee["address"] ?></h2>

</body>
</html>


