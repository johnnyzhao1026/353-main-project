<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
  $oldprovinceID = $_GET["id"];
  $provinceID = $_GET["id"];
  $sql_query = "select * from province where provinceID = '$provinceID'";
  $province = mysqli_query($conn,$sql_query);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Province</title>
</head>
<body>

<h1>Edit province</h1>
    
<form action ="./updateProvince.php" method ="post">

<?php
    while($data = mysqli_fetch_array($province))
    { ?>
  <label> <b>Province ID</b> </label><br>
  <input type=text placeholder="please enter id..." name='provinceID'required value="<?=$data["provinceID"]?>"> </input><br>

  <label> <b>Province</b> </label><br>
  <input type=text placeholder="please enter province" name='provinceName' required  value="<?=$data["provinceName"]?>"> </input><br>

  <label> <b>Age Group</b> </label><br>
  <input type=text placeholder="please enter group ID..." name='allowedAgeGroup' required  value="<?=$data["allowedAgeGroup"]?>"> </input><br>

  <!-- key -->
  <input type="hidden" name='oldID' required  value="<?=$oldprovinceID?>"> </input><br>
  <?php 
    }
    ?>

<button type="submit">Update</button>
</form>


<a href="./province.php">Back to province page</a>
</body>
</html>