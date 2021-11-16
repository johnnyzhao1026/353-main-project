
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
  <title>Query 11</title>
</head>
<body>

<h2>Query 11</h2>

<h3>  Perform a vaccine to a person.</h3>

<table border="2">
  <tr>
  <td>person ID</td>
  <td>facility name</td>
    <td>Employee ID</td>
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select person.id, facility.facilityName, given.EID from main.person, main.facility, main.given, main.vaccination, main.employee where
person.id = given.id && given.EID = employee.EID && given.g_id = vaccination.id && vaccination.status= 'safe'&& given.facility_id = facility.id"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['facilityName']; ?></td>
    <td><?php echo $data['EID']; ?></td>    
   
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>



