
<?php require_once '../database.php';

$statement = $conn->prepare("select id,max_age, min_age from main.age as age where age.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$age = $statement->fetch(PDO::FETCH_ASSOC);



    if (isset($_POST["max_age"])&&isset($_POST["min_age"]) &&isset($_POST["id"]) )

    {

        $statement = $conn->prepare("update main.age set max_age = :max_age,min_age = :min_age where id = :id;"
   );
    


$statement->bindParam(':max_age', $_POST["max_age"]);
$statement->bindParam(':min_age', $_POST["min_age"]);
$statement->bindParam(':id', $_POST["id"]);

if($statement->execute())
    header("Location: .");
    else
    header("Location: ./edit.php?id=".$_POST["id"]);




   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Edit age</h1>
    
<form action ="../age/edit.php" method ="post">

  
  <label> <b>group ID</b> </label><br>
  <input type=text placeholder="please enter group ID..." name='id' id="id" value="<?=$age["id"]?>"> </input><br>

  <label> <b>Maximum age</b> </label><br>
  <input type=text placeholder="please enter maximal  age" name='max_age' required id="max_age" value="<?=$age["max_age"]?>"> </input><br>

  <label> <b>LMinimal age</b> </label><br>
  <input type=text placeholder="please enter minimal age" name='min_age' required id="min_age" value="<?=$age["min_age"]?>"> </input><br>

  
  <input type="hidden" name='id' required id="id" value="<?=$age["id"]?>"> </input><br>

<button type="submit">Update</button>
</form>


<a href="./">Back to main page</a>
</body>
</html>
