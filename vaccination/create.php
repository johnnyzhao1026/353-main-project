<?php require_once '../database.php';
  if (isset($_POST["id"])&&  isset($_POST["type"])&&isset($_POST["status"])&&isset($_POST["date_sus"])&&isset($_POST["date_approval"]) )
        {

        $vaccination = $conn->prepare("insert into main.vaccination (id,type,status,date_sus,date_approval)
        values(:id,:type,:status,:date_sus,:date_approval);
    ");

$vaccination->bindParam(':id', $_POST["id"]);
$vaccination->bindParam(':type', $_POST["type"]);
$vaccination->bindParam(':status', $_POST["status"]);
$vaccination->bindParam(':date_sus', $_POST["date_sus"]);
$vaccination->bindParam(':date_approval', $_POST["date_approval"]);

 if($vaccination->execute())
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


<h1>Add vaccination</h1>
    
<form action ="./create.php" method ="post">

  <label> <b>Vaccination ID</b> </label><br>
  <input type=text placeholder="please enter vaccination ID" name='id' required> </input><br>

  <label> <b>Vaccination type</b> </label><br>
  <input type=text placeholder="please enter vaccination type" name='type' required> </input><br>

  
  <label> <b>Status</b> </label><br>
  <input type=text placeholder="please enter status" name='status' required> </input><br>

  <label> <b>Date suspend</b> </label><br>
  <input type=text placeholder="YYYY-MM-DD" name='date_sus' required> </input><br>

  
  <label> <b>Date approval</b> </label><br>
  <input type=text placeholder="YYYY-MM-DD" name='date_approval' required> </input><br>




<button type="submit">Add</button>
</form>



<a href="./">Back to main page</a>
</body>
</html>


                           
