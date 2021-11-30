<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
  $oldID = $_GET["id"];
  $ageGroupID = $_GET["id"];
  $sql_query = "select * from groupage where ageGroup = '$ageGroupID'";
  $ageGroup = mysqli_query($conn,$sql_query);
}



?>





<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit age Group</title>
</head>
<body>
<div><h1>Edit age group</h1>
    
    <form action ="./updateAgeGroup.php" method ="post">
    
    <?php
    while($data = mysqli_fetch_array($ageGroup))
    { ?>
    <label> <b>age group</b> </label><br>
      <input type=text name='ageGroup' required value="<?=$data['ageGroup']?>"> </input><br>
    
      <label> <b>min age</b> </label><br>
      <input type=text  name='min' required value="<?=$data['min']?>"> </input><br>

      <label> <b>max age</b> </label><br>
      <input type=text  name='max' required value="<?=$data['max']?>"> </input><br>
     
       <!-- key -->
      <input type="hidden" name='oldID' required  value="<?=$oldID?>"> </input><br>
      <?php 
    }
    ?>

    <button type="submit">Update</button>
    </form>
    <br>
    
    <a href="./age.php">Back to age Records page</a>
    </body>
    
  


</html>