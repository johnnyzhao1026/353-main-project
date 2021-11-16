
<?php require_once '../database.php';

$statement = $conn->prepare("select id, province, 
groupID from main.province as province where province.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$province = $statement->fetch(PDO::FETCH_ASSOC);



if (isset($_POST["id"])&&isset($_POST["province"])&&isset($_POST["groupID"])
    ) {

    $statement = $conn->prepare("update main.province set province = :province,groupID = :groupID where 
    id = :id;"
   );
    

$statement->bindParam(':id', $_POST["id"]);
$statement->bindParam(':province', $_POST["province"]);
$statement->bindParam(':groupID', $_POST["groupID"]);




if($statement->execute()) {
    header("Location: .");}
    else{
    header("Location: ./edit.php?id=".$_POST["id"]);

    }


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

<h1>Edit person</h1>
    
<form action ="./edit.php" method ="post">

  
  <label> <b>ID</b> </label><br>
  <input type=text placeholder="please enter id..." name='id' id="id" value="<?=$province["id"]?>"> </input><br>

  <label> <b>Province</b> </label><br>
  <input type=text placeholder="please enter province" name='province' required id="province" value="<?=$province["province"]?>"> </input><br>

  <label> <b>Group ID</b> </label><br>
  <input type=text placeholder="please enter group ID..." name='groupID' required id="groupID" value="<?=$province["groupID"]?>"> </input><br>

  

<button type="submit">Update</button>
</form>


<a href="./">Back to main page</a>
</body>
</html>