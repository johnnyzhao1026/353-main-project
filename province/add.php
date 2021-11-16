<?php require_once '../database.php';
  if (isset($_POST["id"])&&  isset($_POST["province"])&&isset($_POST["groupID"]) )
        {

        $province = $conn->prepare("insert into main.province (id,province,groupID)
        values(:id,:province,:groupID);
    ");

$province->bindParam(':id', $_POST["id"]);
$province->bindParam(':province', $_POST["province"]);
$province->bindParam(':groupID', $_POST["groupID"]);
 

 if($province->execute())
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


<h1>Add province</h1>
    
<form action ="./add.php" method ="post">

  <label> <b> ID</b> </label><br>
  <input type=text placeholder="please enter ID" name='id' required> </input><br>

  <label> <b> province</b> </label><br>
  <input type=text placeholder="please enter province" name='province' required> </input><br>

  
  <label> <b>GroupID</b> </label><br>
  <input type=text placeholder="please enter group ID" name='groupID' required> </input><br>



<button type="submit">Add</button>
</form>



<a href="./">Back to main pprovince</a>
</body>
</html>


                           
