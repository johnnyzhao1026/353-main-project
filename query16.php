
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
  <title>Query 16</title>
</head>
<body>

<h2>Query 16</h2>

<h3> Give a report of the population’s vaccination by province between January 1st
2021 and July 22nd 2021.</h3>

<table border="2">
  <tr>
    
  <td>province</td>
    <td>vaccination type</td>
    <td>total</td>
    
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT population.province, population.type_vaccine,COUNT(population.id)AS total_num
FROM
(SELECT facility.province AS province, vaccination.type AS type_vaccine, given.g_id AS id
FROM main.vaccination, main.facility, main.given where given.facility_id = facility.id       
&& vaccination.id = given.g_id &&  given.date_vaccination BETWEEN '2021-01-01' AND '2021-07-22'
GROUP BY facility.province, type_vaccine, given.id) AS population
GROUP BY population.province, population.type_vaccine
ORDER BY population.province"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['province']; ?></td>
    <td><?php echo $data['type_vaccine']; ?></td>
    <td><?php echo $data['total_num']; ?></td>    
    
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>









