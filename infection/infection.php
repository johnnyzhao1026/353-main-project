<?php
// connect to db
include_once '../connectdb.php';
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Infection Records</title>
</head>
<body>

<h2>Covid-19 infection Variant Type</h2>

<h3> <a href="../infection/create.php">Create</a></h3>
<table border="1" cellspacing="0">
      
        <tr style="background-color: lightgray;">
            <td>infected Type ID</td>
            <td>infected type name</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        
<?php

$records = mysqli_query($conn,"select * from infectedtype"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['infectedTypeID']; ?></td>
    <td><?php echo $data['infectedTypeName']; ?></td>
    
      
    <td><a href="../infection/edit.php?id=<?php echo $data['infectedTypeID']; ?>">Edit</a></td>
    <td><a href="../infection/delete.php?id=<?php echo $data['infectedTypeID']; ?>">Delete</a></td>
   
  </tr>	
<?php
}
?>
</table>

<a href="../index.php">Back to main page</a>
</body>
</html>