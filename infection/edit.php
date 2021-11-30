


<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
  $infectedTypeID = $_GET["id"];
  $sql_query = "select * from infectedtype where infectedTypeID = '$infectedTypeID'";
  $infection = mysqli_query($conn,$sql_query);
}



?>





<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit infection Type</title>
</head>
<body>
<div><h1>Edit infection type</h1>
    
    <form action ="./updateInfection.php" method ="post">
    
    <?php
    while($data = mysqli_fetch_array($infection))
    { ?>
    <label> <b>Infected Type ID</b> </label><br>
      <input type=text name='infectedTypeID' required value="<?=$data['infectedTypeID']?>"> </input><br>
    
      <label> <b>Infected Type Name</b> </label><br>
      <input type=text  name='infectedTypeName' required value="<?=$data['infectedTypeName']?>"> </input><br>
     

      <input type=hidden name='oldinfectedTypeID' required value="<?=$data['infectedTypeID']?>"> </input><br>
      <?php 
    }
    ?>

    <button type="submit">Update</button>
    </form>
    <br>
    
    <a href="./infection.php">Back to Infection Records page</a>
    </body>
    
  


</html>


