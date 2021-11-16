
<?php require_once '../database.php';

$statement = $conn->prepare("select id,num,yorn, i_medcard, infection_date, type from main.infect as infect where infect.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$infect = $statement->fetch(PDO::FETCH_ASSOC);



    if (isset($_POST["id"])&&isset($_POST["num"])&&isset($_POST["yorn"])&&isset($_POST["i_medcard"])
       &&isset($_POST["infection_date"])&&isset($_POST["type"])   )
    {

    $statement = $conn->prepare("update main.infect set num = :num,yorn=:yorn,i_medcard=:i_medcard,infection_date=:infection_date,type=:type where id = :id;"
   );
    
   $statement->bindParam(':id', $_POST["id"]);
$statement->bindParam(':num', $_POST["num"]);
$statement->bindParam(':yorn', $_POST["yorn"]);
$statement->bindParam(':i_medcard', $_POST["i_medcard"]);
$statement->bindParam(':infection_date', $_POST["infection_date"]);
$statement->bindParam(':type', $_POST["type"]);



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

<h1>Edit infect</h1>
    
<form action ="./edit.php" method ="post">


 
  <label> <b>Number </b> </label><br>
  <input type=text placeholder="please enter number" name='num' required id="num" value="<?=$infect["num"]?>"> </input><br>

  <label> <b>yorn</b> </label><br>
  <input type=text placeholder="yorn" name='yorn' required id="yorn" value="<?=$infect["yorn"]?>"> </input><br>

  <label> <b>infect medcard</b> </label><br>
  <input type=text placeholder="please enter infect medcard" name='i_medcard' required id="i_medcard" value="<?=$infect["i_medcard"]?>"> </input><br>

  <label> <b>infection date</b> </label><br>
  <input type=text placeholder="please enter infection date" name='infection_date' required id="infection_date" value="<?=$infect["infection_date"]?>"> </input><br>

  <label> <b>type</b> </label><br>
  <input type=text placeholder="please enter type" name='type' required id="type" value="<?=$infect["type"]?>"> </input><br>


  <input type="hidden" name='id' required id="id" value="<?=$person["id"]?>"> </input><br>


<button type="submit">Update</button>
</form>


<a href="./">Back to main page</a>
</body>
</html>
