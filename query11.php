<?php

include_once 'connectdb.php';


    $sql_query = "SELECT AppointmentInformation.facilityID, AppointmentInformation.personID, AppointmentInformation.vaccinationType, 
    AppointmentInformation.date, AppointmentInformation.time, 
    AppointmentInformation.timeTo,Person.firstName,Avaliablity.avaliableSpot
    FROM AppointmentInformation, Avaliablity, PublicHealthWorker, VaccinationFacility, Person, HealthWorkerFacilityID
    WHERE AppointmentInformation.facilityID = Avaliablity.facilityID 
    AND AppointmentInformation.time = Avaliablity.avaliableTimeFrom AND AppointmentInformation.timeTo = Avaliablity.avaliableTimeTo 
    AND Avaliablity.facilityWorkerID = HealthWorkerFacilityID.facilityWorkerID AND HealthWorkerFacilityID.personID = PublicHealthWorker.personID 
    AND PublicHealthWorker.personID = Person.personID
  GROUP BY Person.firstName";
    $result = mysqli_query($conn, $sql_query);

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
  <title>Query 11</title>
</head>
<body>

<h2>Query 11</h2>

<h3> Display the bookings and the availability of spots for vaccination for a given facility from a given period of time to a given period of time.</h3>


  <!-- Facilities info in Montreal -->
  <h4>Booking information</h4>
<table border="1" cellspacing="0">
  <tr style="background-color:lightgray;" align="center">
  <td>Facility ID</td>
  <td>Person ID</td>
  <td>Vaccination Type</td>
  <td>Date</td>
  <td>From</td>
  <td>To</td>
  <td>Facility Worker Name</td>
  <td>Avaliable Spot</td>

  </tr>

<?php

  while($data = mysqli_fetch_array($result))
{
?>
  <tr>
  <td><?php echo $data['facilityID']; ?></td>
  <td><?php echo $data['personID']; ?></td>
  <td><?php echo $data['vaccinationType']; ?></td>
  <td><?php echo $data['date']; ?></td>
  <td><?php echo $data['time']; ?></td>
  <td><?php echo $data['timeTo']; ?></td>
  <td><?php echo $data['firstName']; ?></td>
  <td><?php echo $data['avaliableSpot']; ?></td>
    
  </tr>	
<?php
}
?>
</table>
<br>

</body>
</html>














