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

<h3> <a href="../vaccination/create.php">Create</a></h3>
<table border="2">
      
        <tr>
            <td>ID</td>
            <td>Type</td>
            <td>Status</td>
            <td>Date_sus</td>
            <td>Date_approval</td>
            <th>Edit</th>
            <th>Delete</th>
            <th>Display</th>

           
           
            
        </tr>
        
<?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from main.vaccination"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['type']; ?></td>
    <td><?php echo $data['status']; ?></td>    
    <td><?php echo $data['date_sus']; ?></td>  
    <td><?php echo $data['date_approval']; ?></td>    
    <td><a href="../vaccination/edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="../vaccination/delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    <td><a href="../vaccination/display.php?id=<?php echo $data['id']; ?>">Display</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>