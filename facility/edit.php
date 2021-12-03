<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
  $oldID = $_GET["id"];
  $facilityID = $_GET["id"];
  $sql_query = "select * from VaccinationFacility where VaccinationFacility.facilityID = '$facilityID'";
  $facilityID = mysqli_query($conn,$sql_query);
}



?>





<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vaccination Facility</title>
</head>
<body>
<div><h1>Edit Vaccination Facility</h1>
    
    <form action ="./updateVaccinationFacility.php" method ="post">
    
    <?php
    while($data = mysqli_fetch_array($facilityID))
    { ?>
    <label> <b>facilityID</b> </label><br>
      <input type=text name='facilityID' required value="<?=$data['facilityID']?>"> </input><br>
    
    <label> <b>name</b> </label><br>
      <input type=text name='name' required value="<?=$data['name']?>"> </input><br>
    
    <label> <b>address</b> </label><br>
      <input type=text name='address' required value="<?=$data['address']?>"> </input><br>
    
    <label> <b>phoneNum</b> </label><br>
      <input type=text name='phoneNum' required value="<?=$data['phoneNum']?>"> </input><br>
    
    <label> <b>website</b> </label><br>
      <input type=text name='website' required value="<?=$data['website']?>"> </input><br>
    
    <label> <b>faclityType</b> </label><br>
      <input type=text name='faclityType' required value="<?=$data['faclityType']?>"> </input><br>
    
    <label> <b>capacity</b> </label><br>
      <input type=text name='capacity' required value="<?=$data['capacity']?>"> </input><br>
    
    <label> <b>city</b> </label><br>
      <input type=text name='city' required value="<?=$data['city']?>"> </input><br>
    
    <label> <b>country</b> </label><br>
      <input type=text name='country' required value="<?=$data['country']?>"> </input><br>
    
    <label> <b>provinceID</b> </label><br>
      <input type=text name='provinceID' required value="<?=$data['provinceID']?>"> </input><br>
    
    <label> <b>normalDayStartTime</b> </label><br>
      <input type=text name='normalDayStartTime' required value="<?=$data['normalDayStartTime']?>"> </input><br>
    
    <label> <b>normalDayEndTime</b> </label><br>
      <input type=text name='normalDayEndTime' required value="<?=$data['normalDayEndTime']?>"> </input><br>
    
    <label> <b>specialDayStartTime</b> </label><br>
      <input type=text name='specialDayStartTime' required value="<?=$data['specialDayStartTime']?>"> </input><br>
    
    <label> <b>specialDayEndTime</b> </label><br>
      <input type=text name='specialDayEndTime' required value="<?=$data['specialDayEndTime']?>"> </input><br>
    
    <label> <b>acceptWalkInAppointment</b> </label><br>
      <input type=text name='acceptWalkInAppointment' required value="<?=$data['acceptWalkInAppointment']?>"> </input><br>
    
       <!-- key -->
      <input type="hidden" name='oldID' required  value="<?=$oldID?>"> </input><br>
      <?php 
    }
    ?>

    <button type="submit">Update</button>
    </form>
    <br>
    
    <a href="./employee.php">Back to age Records page</a>
    </body>
    
  


</html>