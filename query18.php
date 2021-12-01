
<?php

// connect to db
include_once 'connectdb.php';





//$today = date("Y-m-d");

$sql_query = " SELECT Person.personID,Person.firstName,Person.lastName,Person.phoneNumber,COUNT(VaccinatedHistory.doseNum)as doseNum
FROM PublicHealthWorker,VaccinatedHistory,Person
WHERE PublicHealthWorker.personID = VaccinatedHistory.personID
AND PublicHealthWorker.personID = Person.personID
AND VaccinatedHistory.personID =  Person.personID
GROUP BY Person.firstName
ORDER BY COUNT(VaccinatedHistory.doseNum) DESC;";


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
  <title>Query 18</title>
</head>
<body>

<h2>Query 18</h2>

<h3>A report that display for each nurse in the system. </h3>

<table border="2">
  <tr>
    
  <td>id</td>
    <td>first name</td>
    <td>last name</td>
    <td>phone number</td>
    <td>total dose</td>
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

while($data = mysqli_fetch_array($result))
{

?>
  <tr>
    <td><?php echo $data['personID']; ?></td>
    <td><?php echo $data['firstName']; ?></td>
    <td><?php echo $data['lastName']; ?></td>
    <td><?php echo $data['phoneNumber']; ?></td>
    <td><?php echo $data['doseNum']; ?></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>


