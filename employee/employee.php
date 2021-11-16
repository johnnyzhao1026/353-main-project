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

<h2>Public Health Worker</h2>

<h3> <a href="../employee/create.php">Create</a></h3>

<table border="2">
        <tr>
            <th>ID</th>
            <th>EmpoyeeID</th>
            <th>SSN</th>
            <th>Medicad Card Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Data of Birth</th>
            
            <th>Telephone Number</th>
            <th>Province</th>
            <th>Address</th>
            <th>City</th>
            
            <th>Postal Code</th>
          
            <th>E-mail</th>
            <th>Citzenship</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Display</th>
        </tr>
        
        <?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from main.employee"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['EID']; ?></td>
    <td><?php echo $data['SSN']; ?></td>    
    <td><?php echo $data['medcard']; ?></td>  
    <td><?php echo $data['first_name']; ?></td>  
    <td><?php echo $data['last_name']; ?></td>  
    <td><?php echo $data['birth']; ?></td>  
    <td><?php echo $data['phone']; ?></td>  
    <td><?php echo $data['province']; ?></td>  
    <td><?php echo $data['address']; ?></td>  
    <td><?php echo $data['city']; ?></td>  
    <td><?php echo $data['postal_code']; ?></td>  
    <td><?php echo $data['email']; ?></td>  
    <td><?php echo $data['citizenship']; ?></td>  
    <td><a href="../employee/edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="../employee/delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    <td><a href="../employee/display.php?id=<?php echo $data['id']; ?>">Display</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>