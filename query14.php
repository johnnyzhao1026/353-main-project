
<?php

include_once 'connectdb.php';

if(isset($_POST['date3']) ) {


    $date = $_POST['date3'];


    $sql_query = "SELECT VaccinationFacility.name,VaccinationFacility.address,
       VaccinationFacility.phoneNum,VaccinationFacility.capacity,
       timediff(VaccinationFacility.normalDayStartTime,VaccinationFacility.normalDayENdTime) as operatingHours
FROM VaccinationFacility left join
(SELECT VaccinationFacility.name,COUNT(*)
FROM VaccinationFacility,PublicHealthWorker,AppointmentInformation,Person
WHERE VaccinationFacility.facilityID = AppointmentInformation.facilityID
AND AppointmentInformation.personID = Person.personID
AND Person.personID = PublicHealthWorker.personID
AND PublicHealthWorker.jobTitle = 'nurse'
GROUP BY VaccinationFacility.name) b ON VaccinationFacility.name!=b.name
GROUP BY VaccinationFacility.name;
";


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
  <title>Query 14</title>
</head>
<body>

<h2>Query 14</h2>

<h3>  For a given date, display all the facilities that do not have any nurse scheduled
    to work at the facility. </h3>

<table border="2">
  <tr>
    
  <td>name</td>
    <td>address</td>
    <td>phoneNum</td>
    <td>capacity</td>
    <td>operating hours</td>
  </tr>
<?php

while($data = mysqli_fetch_array($result))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['phoneNum']; ?></td>
    <td><?php echo $data['capacity']; ?></td>
    <td><?php echo $data['operatingHours']; ?></td>

  </tr>	
<?php
}
?>
</table>

</body>
</html>





























