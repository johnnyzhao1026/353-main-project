
<?php

$db = mysqli_connect("localhost:3316","root","","mysql");

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

<h2>Province</h2>
<h3> <a href="../province/add.php">Add</a></h3>
<table border="2">
  <tr>
    <td>ProvinceId</td>
    <td>Province</td>
    <td>GroupId</td>
    <th>Edit</th>
    <th>Delete</th>
           
    
  </tr>

  <?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from main.province"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['province']; ?></td>
    <td><?php echo $data['groupID']; ?></td>    
   
    <td><a href="../province/edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="../province/delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
   
  </tr>	
<?php
}
?>
</table>

</body>
</html>
