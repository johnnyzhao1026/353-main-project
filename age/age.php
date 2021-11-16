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

<h2>Group Aged</h2>

<h3> <a href="../age/create.php">Create</a></h3>
<table border="2">
  <tr>
    <td>groupID</td>
    <td>max_age</td>
    <td>min_age</td>
    <th>Edit</th>
            <th>Delete</th>
            <th>Display</th>
  </tr>

  <?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from main.age"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['max_age']; ?></td>
    <td><?php echo $data['min_age']; ?></td>    
   
    <td><a href="../age/edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="../age/delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    <td><a href="../age/diaplay.php?id=<?php echo $data['id']; ?>">Display</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>
