<?php
// connect to db
include_once '../connectdb.php';
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Vaccination Facility Records</title>
</head>
<body>

<h2>Vaccination Facility Records</h2>

<h3> <a href="../facility/create.php">Create</a></h3>
<table border="1" cellspacing="0">
      
        <tr style="background-color: lightgray;">
            <td>facilityID</td>
            <td>name</td>
            <td>address</td>
            <td>phoneNum</td>
            <td>website</td>
            <td>faclityType</td>
            <td>capacity</td>
            <td>city</td>
            <td>country</td>
            <td>provinceID</td>
            <td>normalDayStartTime</td>
            <td>normalDayEndTime</td>
            <td>specialDayStartTime</td>
            <td>specialDayEndTime</td>
            <td>acceptWalkInAppointment</td>
            <th>Edit</th>
            <th>Delete</th>
            

           
           
            
        </tr>
        
<?php

$records = mysqli_query($conn,"select * from VaccinationFacility"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['facilityID']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['phoneNum']; ?></td>
    <td><?php echo $data['website']; ?></td>
    <td><?php echo $data['faclityType']; ?></td>
    <td><?php echo $data['capacity']; ?></td>
    <td><?php echo $data['city']; ?></td>
    <td><?php echo $data['country']; ?></td>
    <td><?php echo $data['provinceID']; ?></td>
    <td><?php echo $data['normalDayStartTime']; ?></td>
    <td><?php echo $data['normalDayEndTime']; ?></td>
    <td><?php echo $data['specialDayStartTime']; ?></td>
    <td><?php echo $data['specialDayEndTime']; ?></td>
    <td><?php echo $data['acceptWalkInAppointment']; ?></td>
    <td><a href="../facility/edit.php?id=<?php echo $data['facilityID']; ?>">Edit</a></td>
    <td><a href="../facility/delete.php?id=<?php echo $data['facilityID']; ?>">Delete</a></td>
    <!-- <td><a href="../facility/display.php?id=<?php echo $data['typeName']; ?>">Display</a></td> -->
  </tr>	
<?php
}
?>
</table>

<a href="../index.php">Back to main page</a>
</body>
</html>