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

<h2>Person Detail</h2>

<h3> <a href="create.php">Create</a></h3>

<table border="2">
  <tr>
    <td>id</td>
    <td>first name</td>
    <td>last name</td>
    <td>medical card</td>
    <td>birthday</td>
    <td>phone</td>
    <td>province</td>
    <td>address</td>
    <td>city</td>
    <td>post code</td>
    <td>email</td>
    <td>citizenship</td>
    <td>Edit</td>
    <td>Delete</td>
    <td>display</td>
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from main.person"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['first_name']; ?></td>
    <td><?php echo $data['last_name']; ?></td>    
    <td><?php echo $data['medcard']; ?></td>  
    <td><?php echo $data['birth']; ?></td>  
    <td><?php echo $data['phone']; ?></td>  
    <td><?php echo $data['province']; ?></td>  
    <td><?php echo $data['address']; ?></td>  
    <td><?php echo $data['city']; ?></td>  
    <td><?php echo $data['postal_code']; ?></td>  
    <td><?php echo $data['email']; ?></td>  
    <td><?php echo $data['citizenship']; ?></td>  
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    <td><a href="display.php?id=<?php echo $data['id']; ?>">Display</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>