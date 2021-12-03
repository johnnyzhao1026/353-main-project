<?php
// connect to db
include_once '../connectdb.php';
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Worker assignment Information</title>
</head>
<body>

<h2>Assignment System</h2>

<h3> <a href="../assignment/create.php">Create</a></h3>
<table border="1" cellspacing="0">
      
        <tr style="background-color: lightgray;">
            <td>PersonID</td>
            <td>Vaccination Facility Name</td>
            <td>Job title</td>
            <td>Start Working Date</td>
            <td>End Working Date</td>
            <td>facilityID</td>
        </tr>
        
<?php

$records = mysqli_query($conn,"SELECT * from Assignment"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['personID']; ?></td>
    <td><?php echo $data['facilityName']; ?></td>
    <td><?php echo $data['jobTitle']; ?></td>
    <td><?php echo $data['startWorkDate']; ?></td>
    <td><?php echo $data['endWorkDate']; ?></td>
    <td><?php echo $data['facilityID']; ?></td>
      
    <td><a href="../assignment/edit.php?id=<?php echo $data['personID']; ?>">Edit</a></td>
    <td><a href="../assignment/delete.php?id=<?php echo $data['personID']; ?>">Delete</a></td>
   
  </tr>	
<?php
}
?>
</table>

<a href="../index.php">Back to main page</a>
</body>
</html>