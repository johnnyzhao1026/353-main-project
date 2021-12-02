
<?php

// connect to db
include_once 'connectdb.php';





  $today = date("Y-m-d");
  
  $sql_query = " SELECT vaccinationfacility.name,vaccinationfacility.city,vaccinationfacility.address,vaccinationfacility.faclityType,vaccinationfacility.phoneNum,vaccinationfacility.capacity,
  emp.total_workers as total_emp , 
  does.total_does as total_Received_Does,
  bookings.total_bookings as total_bookings
  

FROM vaccinationfacility

LEFT JOIN (SELECT publichealthworker.facilityID, COUNT( distinct publichealthworker.personID) AS total_workers
         FROM publichealthworker 
         group by publichealthworker.facilityID) as emp
         
         ON emp.facilityID = vaccinationfacility.facilityID

LEFT JOIN (select vaccinatedhistory.facilityID, COUNT(vaccinatedhistory.doseNum) as total_does
        FROM vaccinatedhistory
         group by vaccinatedhistory.facilityID) as does                                           
        
         ON does.facilityID = vaccinationfacility.facilityID

LEFT JOIN (SELECT appointmentinformation.facilityID,COUNT(appointmentinformation.date) as total_bookings
         FROM appointmentinformation
         WHERE appointmentinformation.date > '$today'
         group by appointmentinformation.facilityID) as bookings
         
         on bookings.facilityID = vaccinationfacility.facilityID

WHERE vaccinationfacility.city = 'Montreal'";

   

  $result = mysqli_query($conn,$sql_query);

if($result){
  echo "data found";
}
else {echo "no data matched";
      die;
}

  

?>

<!DOCTYPE html> 
<html>
<head>
  <title>Query 19</title>
</head>

<body>

<h2>Query 19</h2>

<h3> Give a detailed report of all the facilities in the city of Montréal. 
  The report should include the name, address, type, phone number and capacity of the facility, 
  the total number of public health workers working in the facility, 
  the total number of doses people have received in the facility 
  and the total number of doses scheduled by people to be vaccinated in the facility in the future. 
  The report should be displayed in ascending order by the total number of doses given by each facility.</h3>


  <!-- Facilities info in Montreal -->
  <h4>Facilities info in Montreal</h4>
<table border="1" cellspacing="0">
  <tr style="background-color:lightgray;" align="center">
  <td>Facility Name</td>
  <td>Facility Address</td>
  <td>Facility Type</td>
  <td>Facility phone</td>
  <td>Facility capacity</td>
  <td>Total employees</td>
  <td>Total Received Does number</td>
  <td>Future bookings number</td>

  </tr>

<?php

  while($data = mysqli_fetch_array($result))
{
?>
  <tr>
  <td><?php echo $data['name']; ?></td>
  <td><?php echo $data['address']; ?></td>
  <td><?php echo $data['faclityType']; ?></td>
  
  <td><?php echo $data['phoneNum']; ?></td>
  <td><?php echo $data['capacity']; ?></td>
  <td><?php echo $data['total_emp']; ?></td>
  <td><?php echo $data['total_Received_Does']; ?></td>
  <td><?php echo $data['total_bookings']; ?></td>
    
  </tr>	
<?php
}
?>
</table>
<br>



<h3><a href="./index.php">Back to main page</a></h3>
</body>
</html>




