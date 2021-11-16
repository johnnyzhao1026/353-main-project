

<?php require_once '../database.php';

if (isset($_POST["num"])&&isset($_POST["i_medcard"])
   &&isset($_POST["infection_date"])&&isset($_POST["type"]) &&isset($_POST["ID"]) ) {

    $infect = $conn->prepare("insert into main.infect (num,i_medcard,infection_date,
    type,ID)
    values(:num,:i_medcard,:infection_date,
    :type,:ID);
    ");


$infect->bindParam(':num', $_POST["num"]);

$infect->bindParam(':i_medcard', $_POST["i_medcard"]);
$infect->bindParam(':infection_date', $_POST["infection_date"]);
$infect->bindParam(':type', $_POST["type"]);
$infect->bindParam(':ID', $_POST["ID"]);


if($infect->execute())
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

<h1>Add infect</h1>
    
<form action ="./create.php" method ="post">


<label> <b>infection ID</b> </label><br>
  <input type=text placeholder="please enter infection ID..." name='ID' required> </input><br>

  

  
  <label> <b>Number</b> </label><br>
  <input type=text placeholder="please enter number..." name='num' required> </input><br>

  <label> <b>Y or N</b> </label><br>
  <input type=text placeholder="please enter Y or N..." name='yorn' required> </input><br>

  <label> <b>Medcard</b> </label><br>
  <input type=text placeholder="please enter medcardl..." name='i_medcard' required> </input><br>

  <label> <b>Infection date</b> </label><br>
  <input type=text placeholder="YYYY-MM-DD" name='infection_date' required> </input><br>

  <label> <b>Type</b> </label><br>
  <input type=text placeholder="please enter type..." name='type' required> </input><br>

  
<button type="submit">Add</button>
</form>


<a href="./">Back to main page</a>
</body>
</html>
