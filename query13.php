
<?php
include_once 'connectdb.php';

if( isset($_POST['name'])) {


    $date = $_POST['date'];
    $name = $_POST['name'];

    $sql_query = "SELECT PublicHealthWorker.facilityID,Person.firstName,Person.lastName,Person.email,PublicHealthWorker.salary
FROM PublicHealthWorker,Person,VaccinationFacility
WHERE PublicHealthWorker.jobTitle = 'nurse'
AND PublicHealthWorker.personID = Person.personID
AND VaccinationFacility.facilityID = PublicHealthWorker.facilityID
AND VaccinationFacility.name = '$name'
ORDER BY PublicHealthWorker.salary DESC;";


    $result = mysqli_query($conn, $sql_query);
}
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Query 13</title>
</head>
<body>

<h2>Query 13</h2>

<h3> Get details of all the people who live in the city of Montréal and who got
vaccinated at least two doses of different types of vaccines.</h3>

<table border="2">
  <tr>
    
  <td>facility_id</td>
      <td>first name</td>
    <td>last name</td>

    <td>email</td>
    <td>salary</td>

    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

while($data = mysqli_fetch_array($result))
{
?>
  <tr>
    <td><?php echo $data['facilityID']; ?></td>
    <td><?php echo $data['firstName']; ?></td>
      <td><?php echo $data['lastName']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['salary']; ?></td>
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>


































































