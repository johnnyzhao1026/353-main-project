<?php
// connect to db
include_once '../connectdb.php';
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Booking Information</title>
</head>
<body>

<h2>Booking System</h2>

<h3> <a href="../book/create.php">Create</a></h3>
<table border="1" cellspacing="0">
      
        <tr style="background-color: lightgray;">
            <td>Facility ID</td>
            <td>PersonID</td>
            <td>VaccinationType</td>
            <td>Date</td>
            <td>Time From</td>
            <td>Time To</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        
<?php

$records = mysqli_query($conn,"SELECT * FROM AppointmentInformation"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['facilityID']; ?></td>
    <td><?php echo $data['personID']; ?></td>
    <td><?php echo $data['vaccinationType']; ?></td>
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['time']; ?></td>
    <td><?php echo $data['timeTo']; ?></td>
      
    <td><a href="../book/edit.php?id=<?php echo $data['personID']; ?>">Edit</a></td>
    <td><a href="../book/delete.php?id=<?php echo $data['personID']; ?>">Delete</a></td>
   
  </tr>	
<?php
}
?>
</table>

<a href="../index.php">Back to main page</a>
</body>
</html>