<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
  
  $personID = $_GET["id"];
  $sql_query = "SELECT * FROM Assignment";
  
  $Assignment = mysqli_query($conn,$sql_query);
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
    
    <form action ="./updateAssignmentInfo.php" method ="post">
    
    <?php
    while($data = mysqli_fetch_array($Assignment))
    { ?>
    <label> <b>personID</b> </label><br>
      <input type=text name='personID' required value="<?=$data['personID']?>"> </input><br>
    
      <label> <b>facilityName</b> </label><br>
      <input type=text  name='facilityName' required value="<?=$data['facilityName']?>"> </input><br>

      <label> <b>jobTitle</b> </label><br>
      <input type=text  name='jobTitle' required value="<?=$data['jobTitle']?>"> </input><br>

      <label> <b>startWorkDate</b> </label><br>
      <input type="date"  name='startWorkDate' required value="<?=$data['startWorkDate']?>"> </input><br>

      <label> <b>endWorkDate</b> </label><br>
      <input type="date"  name='endWorkDate' required value="<?=$data['endWorkDate']?>"> </input><br>
     
      <label> <b>facilityID</b> </label><br>
      <input type=text placeholder="please enter your facility ID"  name='facilityID' required value="<?=$data['facilityID']?>"> </input><br>
      

     <?php 
    }
    ?>

    <button type="submit">Update</button>
    </form>
    <br>
    
    <a href="./assignment.php">Back to Assignment Information page</a>
    </body>
    
  


</html>