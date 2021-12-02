<?php
// connect to db
include_once '../connectdb.php';
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Public Health Worker Records</title>
</head>
<body>

<h2>Public Health Worker Records</h2>

<h3> <a href="../employee/create.php">Create</a></h3>
<table border="1" cellspacing="0">
      
        <tr style="background-color: lightgray;">
            <td>jobID</td>
            <td>jobTitle</td>
            <td>startWorkDate</td>
            <td>endWorkDate</td>
            <td>facilityID</td>
            <td>personID</td>
            <td>salary</td>
            <th>Edit</th>
            <th>Delete</th>
            

           
           
            
        </tr>
        
<?php

$records = mysqli_query($conn,"select * from PublicHealthWorker"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['jobID']; ?></td>
    <td><?php echo $data['jobTitle']; ?></td>
    <td><?php echo $data['startWorkDate']; ?></td>
    <td><?php echo $data['endWorkDate']; ?></td>
    <td><?php echo $data['facilityID']; ?></td>
    <td><?php echo $data['personID']; ?></td>
    <td><?php echo $data['salary']; ?></td>
      
    <td><a href="../employee/edit.php?id=<?php echo $data['typeName']; ?>">Edit</a></td>
    <td><a href="../employee/delete.php?id=<?php echo $data['typeName']; ?>">Delete</a></td>
    <!-- <td><a href="../employee/display.php?id=<?php echo $data['typeName']; ?>">Display</a></td> -->
  </tr>	
<?php
}
?>
</table>

<a href="../index.php">Back to main page</a>
</body>
</html>