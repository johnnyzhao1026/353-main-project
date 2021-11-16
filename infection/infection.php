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

<h2>Covid-19 infection Variant type</h2>

<h3> <a href="./create.php">Create</a></h3>
<table border="2">
  <tr>
    <td>ID</td>
    <td>Infection Number</td>
    <td>Yes/No</td>
    <td>i_medcard</td>
    <td>Infection_date</td>
    <td>Type</td>
    <th>Edit</th>
            <th>Delete</th>
            <th>Display</th>

    
  </tr>

  <?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from main.infect"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['num']; ?></td>
    <td><?php echo $data['yorn']; ?></td>    
    <td><?php echo $data['i_medcard']; ?></td> 
    <td><?php echo $data['infection_date']; ?></td> 
    <td><?php echo $data['type']; ?></td>    
   
    <td><a href="../infection/edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="../infection/delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    <td><a href="../infection/display.php?id=<?php echo $data['id']; ?>">Display</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>
