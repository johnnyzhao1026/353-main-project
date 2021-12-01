
<?php

include_once 'connectdb.php';

if(isset($_POST['date']) && isset($_POST['name'])) {


    $date = $_POST['date2'];
    $name = $_POST['name2'];

    $sql_query = "SELECT Person.firstName,Person.lastName,PublicHealthWorker.jobTitle,PublicHealthWorker.startWorkDate,PublicHealthWorker.endWorkDate
FROM VaccinationFacility,AppointmentInformation,Person,PublicHealthWorker
WHERE VaccinationFacility.facilityID = AppointmentInformation.facilityID
AND AppointmentInformation.personID = Person.personID
AND PublicHealthWorker.personID = Person.personID
AND $date > PublicHealthWorker.startWorkDate
AND $date < PublicHealthWorker.endWorkDate
AND $name = VaccinationFacility.name;";


    $result1 = mysqli_query($conn, $sql_query);
}
?>

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
    

      <td>first name</td>
      <td>last name</td>
      <td>job</td>

    
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here



while($data = mysqli_fetch_array($result1))
{
?>
  <tr>
    <td><?php echo $data['firstName']; ?></td>
    <td><?php echo $data['lastName']; ?></td>
    <td><?php echo $data['jobTitle']; ?></td>
    
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>






