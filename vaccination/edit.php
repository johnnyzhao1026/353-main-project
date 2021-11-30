


<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
  $typeName = $_GET["id"];
  $sql_query = "select * from vaccination where typeName = '$typeName'";
  $vaccination = mysqli_query($conn,$sql_query);
}



?>





<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit vaccination</title>
</head>
<body>
<div><h1>Edit Vaccination</h1>
    
    <form action ="./updateVaccination.php" method ="post">
    
    <?php
    while($data = mysqli_fetch_array($vaccination))
    { ?>
    <label> <b>Vaccination Type Name</b> </label><br>
      <input type=text name='typeName' required value="<?=$data['typeName']?>"> </input><br>
    
      <label> <b>Approved Date</b> </label><br>
      <input type=text  name='approvedDate'  value="<?=$data['approvedDate']?>"> </input><br>
     
      <label> <b>status</b> </label><br>
      <input type=text name=' status'  value="<?=$data['status']?>"> </input><br>
    
      <label> <b>Suspension Date</b> </label><br>
      <input type=text  name='dateOfSuspension'  value="<?=$data['dateOfSuspension']?>"> </input><br>
    
      <!-- key -->
      <input type=text  name='oldTypeName'  value="<?=$data['typeName']?>"> </input><br>
      <?php 
    }
    ?>

    <button type="submit">Update</button>
    </form>
    <br>
    
    <a href="./vaccination.php">Back to Vaccination Records page</a>
    </body>
    
  


</html>


