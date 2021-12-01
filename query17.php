
<?php

// connect to db
include_once 'connectdb.php';

//$today = date("Y-m-d");

$sql_query = " SELECT DISTINCT a.personID,a.firstName, a.lastName, a.middleInitial, a.city
FROM (SELECT Person.personID,Person.firstName,Person.lastName,Person.middleInitial,Person.city
FROM VaccinatedHistory,Person
WHERE VaccinatedHistory.personID =  Person.personID ) a,
     (SELECT Person.personID,Person.firstName,Person.lastName,Person.middleInitial,Person.city
FROM AppointmentInformation,Person
WHERE AppointmentInformation.personID =  Person.personID) b
WHERE a.personID = b.personID;";


$result = mysqli_query($conn,$sql_query);

if($result){
    echo "data found";
}
else {
    echo "no data matched";
    die;
}
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Query 17</title>
</head>
<body>

<h2>Query 17</h2>

<h3>Perform a vaccine to a person without an appointment.</h3>

<table border="2">
  <tr>

      <td>id</td>
      <td>first name</td>
      <td>last name</td>
      <td>middle name</td>
      <td>location</td>
    
    
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

//$records = mysqli_query($db,"SELECT facility.city, SUM(shipment.quantity)AS total_vaccines FROM main.facility, main.shipment
//where shipment.facilityID = facility.id && facility.province = 'Quebec' && shipment.date
//BETWEEN '2021-01-01' AND '2021-07-22' GROUP BY facility.city"); // fetch data from database

while($data = mysqli_fetch_array($result))
{
?>
  <tr>
      <td><?php echo $data['personID']; ?></td>
    <td><?php echo $data['firstName']; ?></td>
    <td><?php echo $data['lastName']; ?></td>
      <td><?php echo $data['middleInitial']; ?></td>
      <td><?php echo $data['city']; ?></td>
      
    
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>




