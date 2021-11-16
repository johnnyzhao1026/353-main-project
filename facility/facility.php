<?php

$db = mysqli_connect("localhost:3316","root","","main");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html> 
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Public Health Facility</h2>

<h3> <a href="../facility/create.php">Create</a></h3>
<table border="2">
      
        <tr>
            <td>FacilityID</td>
            <td>Name</td>
            <td>Web Address</td>
            <td>Type</td>
            <td>Telephone Number</td>
            <td>Address</td>
            <td>Province</td>
            <td>ManageID</td>
            <td>Inventory</td>
         
            <th>Edit</th>
            <th>Delete</th>
            <th>Display</th>
            
            
           
            
        </tr>
        

        <?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from main.facility"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['FacilityName']; ?></td>
    <td><?php echo $data['FacilityWebaddress']; ?></td>    
    <td><?php echo $data['FacilityType']; ?></td>  
    <td><?php echo $data['FacilityTelephone']; ?></td>  
    <td><?php echo $data['FacilityAddress']; ?></td>  
    <td><?php echo $data['province']; ?></td>  
     
    <td><?php echo $data['managerID']; ?></td>  
    <td><?php echo $data['inventory']; ?></td>  
    
    <td><a href="../facility/edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="../facility/delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    <td><a href="../facility/display.php?id=<?php echo $data['id']; ?>">Display</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>