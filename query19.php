
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
  <title>Query 19</title>
</head>
<body>

<h2>Query 19</h2>

<h3>  Give a list of all public health workers in a specific facility.</h3>

<table border="2">
  <tr>
    
  <td>employee ID</td>
  <td>employee SSN</td>
  <td>first name</td>
    <td>last name</td>
    <td>birthday</td>
    <td>medical card</td>
    <td>phone</td>
    <td>address</td>
    <td>city</td>
    <td>province</td>
    <td>post code</td>
    <td>citizenship</td>
    <td>email</td>
    <td>start date</td>
    <td>end date</td>
    
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT employee.EID, employee.SSN, employee.first_name, employee.last_name, employee.birth, employee.medcard, 
employee.phone, employee.address, employee.city, employee.province, employee.postal_code, employee.citizenship, employee.email, 
Femployee.start, Femployee.end
FROM main.employee, main.Femployee, main.facility where Femployee.EID = employee.EID && Femployee.FID = facility.id
&& facility.id = 2"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>

  <td><?php echo $data['EID']; ?></td>
  <td><?php echo $data['SSN']; ?></td>
  <td><?php echo $data['first_name']; ?></td>
  <td><?php echo $data['last_name']; ?></td>
  <td><?php echo $data['birth']; ?></td>
  <td><?php echo $data['medcard']; ?></td>
  <td><?php echo $data['phone']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['city']; ?></td>
    <td><?php echo $data['province']; ?></td>
    <td><?php echo $data['postal_code']; ?></td>
    <td><?php echo $data['citizenship']; ?></td>
    <td><?php echo $data['email']; ?></td>
  
    <td><?php echo $data['start']; ?></td>
    <td><?php echo $data['end']; ?></td>
    
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>



