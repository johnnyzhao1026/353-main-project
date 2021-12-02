<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
  $oldID = $_GET["id"];
  $jobID = $_GET["id"];
  $sql_query = "select * from PublicHealthWorker where PublicHealthWorker.jobID = '$id'";
  $jobID = mysqli_query($conn,$sql_query);
}



?>





<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Public Health Worker</title>
</head>
<body>
<div><h1>Edit Public Health Worker</h1>
    
    <form action ="./updatePublicHealthWorker.php" method ="post">
    
    <?php
    while($data = mysqli_fetch_array($jobID))
    { ?>
    <label> <b>jobID</b> </label><br>
      <input type=text name='jobID' required value="<?=$data['jobID']?>"> </input><br>
    
    <label> <b>jobTitle</b> </label><br>
      <input type=text name='jobTitle' required value="<?=$data['jobTitle']?>"> </input><br>
    
    <label> <b>startWorkDate</b> </label><br>
      <input type=text name='startWorkDate' required value="<?=$data['startWorkDate']?>"> </input><br>
    
    <label> <b>endWorkDate</b> </label><br>
      <input type=text name='endWorkDate' required value="<?=$data['endWorkDate']?>"> </input><br>
    
    <label> <b>facilityID</b> </label><br>
      <input type=text name='facilityID' required value="<?=$data['facilityID']?>"> </input><br>
    
    <label> <b>personID</b> </label><br>
      <input type=text name='personID' required value="<?=$data['personID']?>"> </input><br>
    
    <label> <b>salary</b> </label><br>
      <input type=text name='salary' required value="<?=$data['salary']?>"> </input><br>
    
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