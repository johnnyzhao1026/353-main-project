
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
  <title>Query 15</title>
</head>
<body>

<h2>Query 15</h2>

<h3> Give a report of the inventory of vaccines in each province.</h3>

<table border="2">
  <tr>
    
  <td>facility province</td>
    <td>vaccination type</td>
    <td>total</td>
    
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT facility.province, vaccination.type AS vaccine_type,SUM(inventory.quantity)AS total
FROM main.facility, main.vaccination, main.inventory where facility.id = inventory.facilityID && inventory.v_id= vaccination.id
GROUP BY facility.province,inventory.v_id
ORDER BY facility.province ASC, total DESC"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['province']; ?></td>
    <td><?php echo $data['vaccine_type']; ?></td>
    <td><?php echo $data['total']; ?></td>    
    
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>






