
<?php

// connect to db
include_once 'connectdb.php';

?>

<!DOCTYPE html> 
<html>
<head>
  <title>Query 20</title>
</head>
<body>

<h2>Query 20</h2>

<h3> Get details of all the people who live in the city of Montréal and who got
vaccinated only one dose.</h3>

<table border="2">
  <tr>
    
  <td>First name</td>
  <td>Last name</td>
    <td>Birth</td>
    <td>Email</td>
    <td>phone</td>
    <td>city</td>
    <td>infected times</td>
    
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

$sql_query = "select Person.firstName,Person.lastName,Person.dateOfBirth,email,Person.phoneNumber,Person.city,InfectedHistory.infectedTimes
from Person,InfectedHistory,VaccinatedHistory
where age >= 18
and (VaccinatedHistory.doseNum = 0 or VaccinatedHistory.doseNum = NULL)
and Person.isRegistered = 1
and(Person.mediCardNum = InfectedHistory.mediCardNum or InfectedHistory.mediCardNum = NULL)  
and (Person.mediCardNum = VaccinatedHistory.mediCardNum or VaccinatedHistory.mediCardNum = null)
group by Person.province
" ;

$result = mysqli_query($conn,$sql_query);

// $records = mysqli_query($db,"SELECT employee.EID, employee.first_name, employee.last_name, employee.birth,
// employee.phone, employee.city, employee.email, facility.facilityName AS location_name
// FROM main.employee, main.Femployee,main.facility, main.province, main.Eperson,main.person, main.given 
// where Eperson.id = person.id && Eperson.EID = Femployee.EID && Femployee.EID = employee.EID && 
// Femployee.FID = facility.id&& employee.province = 'Quebec' && given.id = person.id && given.dose_num < 1"); // fetch data from database

while($data = mysqli_fetch_array($result))
{
?>
  <tr>

  <td><?php echo $data['firstName']; ?></td>
  <td><?php echo $data['lastName']; ?></td>
  <td><?php echo $data['dateOfBirth']; ?></td>
  <td><?php echo $data['email']; ?></td>
  <td><?php echo $data['phoneNumber']; ?></td>
  <td><?php echo $data['city']; ?></td>
  <td><?php echo $data['infectedTimes']; ?></td>
  
 
   
    
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>




