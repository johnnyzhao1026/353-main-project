
<?php

include_once 'connectdb.php';

if(isset($_POST['name2'])) {

    $name = $_POST['name2'];

    $sql_query = "SELECT Person.firstName,Person.lastName,PublicHealthWorker.jobTitle,PublicHealthWorker.startWorkDate,PublicHealthWorker.endWorkDate
FROM VaccinationFacility,AppointmentInformation,Person,PublicHealthWorker
WHERE VaccinationFacility.facilityID = AppointmentInformation.facilityID
AND AppointmentInformation.personID = Person.personID
AND PublicHealthWorker.personID = Person.personID
AND VaccinationFacility.name = '$name';";


    $result = mysqli_query($conn, $sql_query);

    if($result){
        echo "data found";
    }
    else {
        echo "no data matched";
        die;
    }

}
?>




<!DOCTYPE html> 
<html>
<head>
  <title>Query 15</title>
</head>
<body>

<h2>Query 15</h2>

<h3> For a given facility and on a given date, display the schedule for the facility.</h3>

<table border="2">
  <tr>
    

      <td>first name</td>
      <td>last name</td>
      <td>job</td>
      <td>start date</td>
      <td>end date</td>
    
  </tr>

<?php


while($data = mysqli_fetch_array($result))
{
?>
  <tr>
    <td><?php echo $data['firstName']; ?></td>
    <td><?php echo $data['lastName']; ?></td>
    <td><?php echo $data['jobTitle']; ?></td>
      <td><?php echo $data['startWorkDate']; ?></td>
      <td><?php echo $data['endWorkDate']; ?></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>






