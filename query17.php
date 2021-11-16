
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
  <title>Query 17</title>
</head>
<body>

<h2>Query 17</h2>

<h3>Give a report by city in Québec the total number of vaccines received in each
city between January 1st 2021 and July 22nd 2021.</h3>

<table border="2">
  <tr>
    
  <td>facility city</td>
    <td>total</td>
    
    
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT facility.city, SUM(shipment.quantity)AS total_vaccines FROM main.facility, main.shipment 
where shipment.facilityID = facility.id && facility.province = 'Quebec' && shipment.date 
BETWEEN '2021-01-01' AND '2021-07-22' GROUP BY facility.city"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['city']; ?></td>
    <td><?php echo $data['total_vaccines']; ?></td>
      
    
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>




