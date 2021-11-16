<?php require_once '../database.php';
  if (isset($_POST["id"])&&  isset($_POST["max_age"])&&isset($_POST["min_age"]) )
        {

        $age = $conn->prepare("insert into main.age (id,max_age,min_age)
        values(:id,:max_age,:min_age);
    ");

$age->bindParam(':id', $_POST["id"]);
$age->bindParam(':max_age', $_POST["max_age"]);
$age->bindParam(':min_age', $_POST["min_age"]);
 

 if($age->execute())
    header("Location: .");


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


<h1>Add age</h1>
    
<form action ="./create.php" method ="post">

  <label> <b>Group ID</b> </label><br>
  <input type=text placeholder="please enter group ID" name='id' required> </input><br>

  <label> <b>Max age</b> </label><br>
  <input type=text placeholder="please enter max age" name='max_age' required> </input><br>

  
  <label> <b>Min age</b> </label><br>
  <input type=text placeholder="please enter min age" name='min_age' required> </input><br>



<button type="submit">Add</button>
</form>



<a href="./">Back to main page</a>
</body>
</html>


                           
