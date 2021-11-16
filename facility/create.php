
<?php require_once '../database.php';

if (isset($_POST["id"])&&  isset($_POST["FacilityName"])&&isset($_POST["FacilityWebaddress"])&&isset($_POST["FacilityType"])&&isset($_POST["FacilityTelephone"])
   &&isset($_POST["FacilityAddress"])&&isset($_POST["province"])&&isset($_POST["managerID"])&&isset($_POST["inventory"])   ) 
{

    $facility = $conn->prepare("insert into main.facility (id,FacilityName,FacilityWebaddress,FacilityType,FacilityTelephone,FacilityAddress,
    province,managerID,inventory)
    values(:id,:FacilityName,:FacilityWebaddress,:FacilityType,:FacilityTelephone,:FacilityAddress,
    :province,:managerID,:inventory);
    ");

$facility->bindParam(':id', $_POST["id"]);
$facility->bindParam(':FacilityName', $_POST["FacilityName"]);
$facility->bindParam(':FacilityWebaddress', $_POST["FacilityWebaddress"]);
$facility->bindParam(':FacilityType', $_POST["FacilityType"]);
$facility->bindParam(':FacilityTelephone', $_POST["FacilityTelephone"]);
$facility->bindParam(':FacilityAddress', $_POST["FacilityAddress"]);
$facility->bindParam(':province', $_POST["province"]);
$facility->bindParam(':managerID', $_POST["managerID"]);
$facility->bindParam(':inventory', $_POST["inventory"]);


if($facility->execute())
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

<h1>Add Facility</h1>
    
<form action ="./create.php" method ="post">

  <label> <b>Facility ID</b> </label><br>
  <input type=text placeholder="please enter Facility ID..." name='id' required> </input><br>

  <label> <b>Facility Name</b> </label><br>
  <input type=text placeholder="please enter Facility Name..." name='FacilityName' required> </input><br>

  
  <label> <b>Facility Web address</b> </label><br>
  <input type=text placeholder="please enter Facility Web address..." name='FacilityWebaddress' required> </input><br>

  <label> <b>Facility Type</b> </label><br>
  <input type=text placeholder="please enter Facility Type..." name='FacilityType' required> </input><br>

  <label> <b>Facility Telephone</b> </label><br>
  <input type=text placeholder="please enter Facility Telephone..." name='FacilityTelephone' required> </input><br>

  <label> <b>Facility Address</b> </label><br>
  <input type=text placeholder="please enter Facility Address..." name='FacilityAddress' required> </input><br>

  <label> <b>Province</b> </label><br>
  <input type=text placeholder="please enter province<..." name='province' required> </input><br>

  <label> <b>Manager ID</b> </label><br>
  <input type=text placeholder="please enter manager ID..." name='managerID' required> </input><br>

  <label> <b>Inventory</b> </label><br>
  <input type=text placeholder="please enter Inventory..." name='inventory' required> </input><br>

  
<button type="submit">Add</button>
</form>


<a href="./">Back to main page</a>
</body>
</html>
