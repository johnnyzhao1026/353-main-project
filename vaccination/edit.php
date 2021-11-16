
<?php require_once '../database.php';

$statement = $conn->prepare("select * from main.vaccination as vaccination where vaccination.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$vaccination = $statement->fetch(PDO::FETCH_ASSOC);

    if (isset($_POST["id"])&&  isset($_POST["type"])&&isset($_POST["status"])&&isset($_POST["date_sus"])&&isset($_POST["date_approval"]))
    {

    $vaccination = $conn->prepare("update main.vaccination set id = :id,type = :type,status = :status,date_sus=:date_sus,date_approval=:date_approval where id = :id;"
   );
    

$statement->bindParam(':id', $_POST["id"]);
$statement->bindParam(':type', $_POST["type"]);
$statement->bindParam(':status', $_POST["status"]);
$statement->bindParam(':date_sus', $_POST["date_sus"]);
$statement->bindParam(':date_approval', $_POST["date_approval"]);

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

<h1>Edit vaccination</h1>
    
<form action ="./edit.php" method ="post">

  
  <label> <b>vaccination ID</b> </label><br>
  <input type=text placeholder="please enter vcaccination ID" name='id' id="id" value="<?=$vaccination["id"]?>"> </input><br>

  <label> <b>type</b> </label><br>
  <input type=text placeholder="please enter type" name='type' required id="type" value="<?=$vaccination["type"]?>"> </input><br>

  <label> <b>status</b> </label><br>
  <input type=text placeholder="please enter status" name='status' required id="status" value="<?=$vaccination["status"]?>"> </input><br>

  <label> <b>date suspense</b> </label><br>
  <input type=text placeholder="YYYY-MM-DD" name='date_sus' required id="date_sus" value="<?=$vaccination["date_sus"]?>"> </input><br>

  <label> <b>date approval</b> </label><br>
  <input type=text placeholder="YYYY-MM-DD" name='date_approval' required id="date_approval" value="<?=$vaccination["date_approval"]?>"> </input><br>

  
  <input type="hidden" name='id' required id="id" value="<?=$person["id"]?>"> </input><br>

<button type="submit">Update</button>
</form>


<a href="./">Back to main page</a>
</body>
</html>
