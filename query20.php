
<?php

// connect to db
include_once 'connectdb.php';


if(isset($_POST['personID'])){


  $personID = $_POST['personID'];
  
  $sql_query = "select person.firstName,person.lastName,person.dateOfBirth, VaccinationFacility.name,vaccinationFacility.address, appointmentinformation.date,appointmentinformation.time
                from VaccinationFacility,appointmentinformation,person
                where appointmentinformation.personID = $personID and appointmentinformation.facilityID = VaccinationFacility.facilityID and
                person.personID = $personID
               ";

  $sql_query_infectedhistory ="select * 
                              from infectedhistory
                              where infectedhistory.personID = $personID
                              " ;     
                      
  $sql_query_vaccinatedhistory = "select * 
  from vaccinatedhistory
  where vaccinatedhistory.personID = $personID ;";                
  
  $bookingresult = mysqli_query($conn,$sql_query);
  $infectedhistory = mysqli_query($conn,$sql_query_infectedhistory);
  $vaccinatedhistory = mysqli_query($conn,$sql_query_vaccinatedhistory);

}

  

?>

<!DOCTYPE html> 
<html>
<head>
  <title>Query 20</title>
</head>
<body>

<h2>Query 20</h2>

<h3> For a given person, display the bookings if applicable (include the facility name, 
  address of the facility, day, and time of the booking), the history of vaccinations if applicable, 
  and the history of infections if applicable</h3>


  <!-- facility and appointment info -->
  <h4>Appointment Information</h4>
<table border="1" cellspacing="0">
  <tr style="background-color:lightgray;" align="center">
  <td>First Name</td>
  <td>Last Name</td>
  <td>DOB</td>
  <td>facility name</td>
  <td>facility address</td>
  <td>appointment date</td>
  <td>appointment time</td>

  </tr>

<?php

  while($data = mysqli_fetch_array($bookingresult))
{
?>
  <tr>
  <td><?php echo $data['firstName']; ?></td>
  <td><?php echo $data['lastName']; ?></td>
  <td><?php echo $data['dateOfBirth']; ?></td>
  
  <td><?php echo $data['name']; ?></td>
  <td><?php echo $data['address']; ?></td>
  <td><?php echo $data['date']; ?></td>
  <td><?php echo $data['time']; ?></td>
    
  </tr>	
<?php
}
?>
</table>
<br>

<!-- infection history -->
<h4>infection history</h4>
<table border="1" cellspacing="0" >
    <tr style="background-color:lightgray;" align="center">
        
        <td>infectedTimes</td>
        <td>date of infection</td>
        <td>infected type id</td>

    </tr>

<?php
while($data = mysqli_fetch_array($infectedhistory))
{ ?>

    <tr align="center">
        <td><?php echo $data['infectedTimes']; ?></td>
        <td><?php echo $data['dateOfInfection']; ?></td>
        <td><?php echo $data['infectedTypeID']; ?></td>
    </tr>

<?php
}
?>
</table> 

</table>
<br>

<!-- vaccination history -->
<h4>vaccinated history</h4>
<table border="1" cellspacing="0" >
    <tr style="background-color:lightgray;" align="center">
        <td>Vaccinated Date</td>
        <td>dose number</td>
        <td>lot number</td>
        <td>vaccinated type name</td>
        <td>given by job ID</td>
    </tr>

<?php
while($data = mysqli_fetch_array($vaccinatedhistory))
{ ?>

    <tr align="center">
        <td><?php echo $data['dateOfVaccinated']; ?></td>
        <td><?php echo $data['doseNum']; ?></td>
        <td><?php echo $data['lotNum']; ?></td>
        <td><?php echo $data['vaccinatedType']; ?></td>
        <td><?php echo $data['givenByJobID']; ?></td>

    </tr>

<?php
}
?>
</table> 

<h3><a href="./index.php">Back to main page</a></h3>
</body>
</html>




