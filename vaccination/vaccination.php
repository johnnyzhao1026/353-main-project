<?php
// connect to db
include_once '../connectdb.php';
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Vaccination Records</title>
</head>
<body>

<h2>Vaccination Records</h2>

<h3> <a href="../vaccination/create.php">Create</a></h3>
<table border="1" cellspacing="0">
      
        <tr style="background-color: lightgray;">
            <td>Vaccination Type name</td>
            <td>Arrpoved Date</td>
            <td>Status</td>
            <td>Date of Suspension</td>
            <th>Edit</th>
            <th>Delete</th>
            

           
           
            
        </tr>
        
<?php

$records = mysqli_query($conn,"select * from vaccination"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['typeName']; ?></td>
    <td><?php echo $data['approvedDate']; ?></td>
    <td><?php echo $data['status']; ?></td>    
    <td><?php echo $data['dateOfSuspension']; ?></td>  
      
    <td><a href="../vaccination/edit.php?id=<?php echo $data['typeName']; ?>">Edit</a></td>
    <td><a href="../vaccination/delete.php?id=<?php echo $data['typeName']; ?>">Delete</a></td>
    <!-- <td><a href="../vaccination/display.php?id=<?php echo $data['typeName']; ?>">Display</a></td> -->
  </tr>	
<?php
}
?>
</table>

<a href="../index.php">Back to main page</a>
</body>
</html>