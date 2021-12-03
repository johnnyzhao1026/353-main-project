<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
  
  $personID = $_GET["id"];
  $sql_query = "select * from AppointmentInformation where AppointmentInformation.personID = '$personID'";
  $AppointmentInformation = mysqli_query($conn,$sql_query);
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointment Information</title>
</head>
<body>
<div><h1>Edit Appointment Information</h1>
    
    <form action ="./updateBook.php" method ="post">
    
    <?php
    while($data = mysqli_fetch_array($AppointmentInformation))
    { ?>
    <label> <b>facilityID</b> </label><br>
      <input type=text name='facilityID' required value="<?=$data['facilityID']?>"> </input><br>
    
      <label> <b>personID</b> </label><br>
      <input type=text  name='personID' required value="<?=$data['personID']?>"> </input><br>

      <label> <b>vaccinationType</b> </label><br>
      <input type=text  name='vaccinationType' required value="<?=$data['vaccinationType']?>"> </input><br>

      <label> <b>date</b> </label><br>
      <input type="date"  name='date' required value="<?=$data['date']?>"> </input><br>

      <label> <b>vaccinationType</b> </label><br>
      <input type="time"  name='time' required value="<?=$data['time']?>"> </input><br>
     
      <label> <b>vaccinationType</b> </label><br>
      <input type="time"  name='timeTo' required value="<?=$data['timeTo']?>"> </input><br>
     
       <!-- key -->
       <input type="hidden" name='personID' required id="id" value="<?=$data["personID"]?>"> </input><br>
      <?php 
    }
    ?>

    <button type="submit">Update</button>
    </form>
    <br>
    
    <a href="./book.php">Back to Appointment Information page</a>
    </body>
    
  


</html>