
<?php require_once '../database.php';

$statement = $conn->prepare("select id, FacilityName,FacilityWebaddress,FacilityType,
FacilityTelephone, FacilityAddress,province,managerID,inventory from main.facility as facility where facility.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$facility = $statement->fetch(PDO::FETCH_ASSOC);



    if ( isset($_POST["FacilityName"])&&isset($_POST["FacilityWebaddress"])&&isset($_POST["FacilityType"])&&
    isset($_POST["FacilityTelephone"]) &&isset($_POST["FacilityAddress"])&&isset($_POST["province"])&&
    isset($_POST["managerID"])&&isset($_POST["inventory"]) &&isset($_POST["id"])  )
    {

    $statement = $conn->prepare("update main.facility set FacilityName = :FacilityName,FacilityWebaddress = :FacilityWebaddress,
    FacilityType=:FacilityType,FacilityTelephone=:FacilityTelephone,FacilityAddress=:FacilityAddress,province=:province,
    managerID=:managerID,inventory=:inventory where id = :id;"
   );
    

$statement->bindParam(':FacilityName', $_POST["FacilityName"]);
$statement->bindParam(':FacilityWebaddress', $_POST["FacilityWebaddress"]);
$statement->bindParam(':FacilityType', $_POST["FacilityType"]);
$statement->bindParam(':FacilityTelephone', $_POST["FacilityTelephone"]);
$statement->bindParam(':FacilityAddress', $_POST["FacilityAddress"]);
$statement->bindParam(':province', $_POST["province"]);
$statement->bindParam(':managerID', $_POST["managerID"]);
$statement->bindParam(':inventory', $_POST["inventory"]);
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

<h1>Edit facility</h1>
    
<form action ="../facility/edit.php" method ="post">

  


 

<label> <b>FacilityName</b> </label><br>
<input type=text placeholder="please enter Facility Name" name='FacilityName' id="FacilityName" value="<?=$facility["FacilityName"]?>"> </input><br>

  <label> <b>Facility Web address</b> </label><br>
  <input type=text placeholder="please enter Facility Web address" name='FacilityWebaddress' required id="FacilityWebaddress" value="<?=$facility["FacilityWebaddress"]?>"> </input><br>

  <label> <b>Facility Type</b> </label><br>
  <input type=text placeholder="Facility Type" name='FacilityType' required id="FacilityType" value="<?=$facility["FacilityType"]?>"> </input><br>

  <label> <b>Facility Telephone</b> </label><br>
  <input type=text placeholder="please enter Facility Telephone number..." name='FacilityTelephone' required id="FacilityTelephone" value="<?=$facility["FacilityTelephone"]?>"> </input><br>

  <label> <b>Facility Address</b> </label><br>
  <input type=text placeholder="please enter Facility address..." name='FacilityAddress' required id="FacilityAddress" value="<?=$facility["FacilityAddress"]?>"> </input><br>

  <label> <b>province</b> </label><br>
  <input type=text placeholder="please enter province" name='province' required id="province" value="<?=$facility["province"]?>"> </input><br>

  <label> <b>manager ID</b> </label><br>
  <input type=text placeholder="please enter manager ID" name='managerID' required id="managerID" value="<?=$facility["managerID"]?>"> </input><br>

<label> <b>inventory</b> </label><br>
<input type=text placeholder="please enter inventory" name='inventory' required id="inventory" value="<?=$facility["inventory"]?>"> </input><br>


  
  <input type="hidden" name='id' required id="id" value="<?=$facility["id"]?>"> </input><br>

<button type="submit">Update</button>
</form>


<a href="./">Back to main page</a>
</body>
</html>
