<?php
// connect to db
include_once '../connectdb.php';
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Province</title>
</head>
<body>

<h2>Province</h2>

<h3> <a href="../province/add.php">Create</a></h3>
<table border="1" cellspacing="0">
      
        <tr style="background-color: lightgray;">
            <td>ProvinceID</td>
            <td>Province Name</td>
            <td>allowdAgeGroup</td>
        </tr>
        
<?php

$records = mysqli_query($conn,"select * from province"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['provinceID']; ?></td>
    <td><?php echo $data['provinceName']; ?></td>
    <td><?php echo $data['allowedAgeGroup']; ?></td>
    
      
    <td><a href="../province/edit.php?id=<?php echo $data['provinceID']; ?>">Edit</a></td>
    <td><a href="../province/delete.php?id=<?php echo $data['provinceID']; ?>">Delete</a></td>
   
  </tr>	
<?php
}
?>
</table>

<a href="../index.php">Back to main page</a>
</body>
</html>

