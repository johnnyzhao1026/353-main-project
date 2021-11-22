<?php
// connect to db
include_once '../connectdb.php';
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Age Group</title>
</head>
<body>

<h2>Age Group</h2>

<h3> <a href="../age/create.php">Create</a></h3>
<table border="1" cellspacing="0">
      
        <tr style="background-color: lightgray;">
            <td>Age Group</td>
            <td>min</td>
            <td>max</td>
            <td>Edit</td>
            <td>Delete</td>
            
        </tr>
        
<?php

$records = mysqli_query($conn,"select * from groupage"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['ageGroup']; ?></td>
    <td><?php echo $data['min']; ?></td>
    <td><?php echo $data['max']; ?></td>
    
      
    <td><a href="../age/edit.php?id=<?php echo $data['ageGroup']; ?>">Edit</a></td>
    <td><a href="../age/delete.php?id=<?php echo $data['ageGroup']; ?>">Delete</a></td>
   
  </tr>	
<?php
}
?>
</table>

<a href="../index.php">Back to main page</a>
</body>
</html>
