
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
  <title>Query 18</title>
</head>
<body>

<h2>Query 18</h2>

<h3>Give a detailed report of all the facilities in the city of Montréal. </h3>

<table border="2">
  <tr>
    
  <td>id</td>
    <td>facility name</td>
    <td>facility web address</td>
    <td>facility type</td>
    <td>facility telephone</td>
    <td>total employee</td>
    <td>total shipment</td>
    <td>total transfer out</td>
    <td>total transfer in</td>
    <td>total vaccination</td>
    <td>total people</td>
    <td>total dose</td>

    
    
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT f.id, f.facilityName, f.facilityWebaddress, f.facilityType, f.facilityTelephone, emp.total_emp, s.total_shipment, 
t.total_outF, tt.total_inF, i.Tvaccination, p.total_people, g.total_dose
FROM facility f
LEFT JOIN (SELECT Fe.FID, COUNT(Fe.EID)AS total_emp
    FROM  Femployee Fe
    WHERE Fe.end IS NULL
    GROUP BY Fe.FID)AS emp ON emp.FID = f.id
LEFT JOIN (SELECT s1.facilityID, SUM(s1.quantity)AS total_shipment
    FROM shipment s1 
    GROUP BY s1.facilityID)AS s ON s.facilityID = f.id
LEFT JOIN (SELECT t1.outF, SUM(t1.count)AS total_outF
    FROM transfer t1 
    GROUP BY t1.outF)AS t ON t.outF = f.id
LEFT JOIN (SELECT t2.inF, SUM(t2.count)AS total_inF
    FROM transfer t2 
    GROUP BY t2.inF)AS tt ON tt.inF = f.id
LEFT JOIN (SELECT inv.facilityID,GROUP_CONCAT(inv.quantity)AS Tvaccination
    FROM inventory inv
    GROUP BY inv.facilityID) AS i ON i.facilityID = f.id
LEFT JOIN (SELECT peop.facility_id, COUNT(peop.facility_id)AS total_people
      FROM (SELECT g.facility_id, g.g_id
          FROM given as g 
          GROUP BY g.facility_id, g.g_id)AS peop
      GROUP BY peop.facility_id)AS p ON p.facility_id = f.id
LEFT JOIN (SELECT g.facility_id, COUNT(g.dose_num)AS total_dose
      FROM given as g 
      GROUP BY g.facility_id)AS g ON g.facility_id = f.id"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['facilityName']; ?></td>
    <td><?php echo $data['facilityWebaddress']; ?></td>
    <td><?php echo $data['facilityType']; ?></td>
    <td><?php echo $data['facilityTelephone']; ?></td>
    <td><?php echo $data['total_emp']; ?></td>
    <td><?php echo $data['total_shipment']; ?></td>
    <td><?php echo $data['total_outF']; ?></td>
    <td><?php echo $data['total_inF']; ?></td>
    <td><?php echo $data['Tvaccination']; ?></td>
    <td><?php echo $data['total_dose']; ?></td>

      
    
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>


