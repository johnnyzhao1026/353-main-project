
<?php
include_once 'connectdb.php';

if( isset($_POST['name'])) {


    $date = $_POST['date'];
    $name = $_POST['name'];

    $sql_query = "SELECT VaccinationFacility.name,Person.firstName,Person.lastName,Person.email,PublicHealthWorker.salary
FROM PublicHealthWorker,Person,VaccinationFacility
WHERE PublicHealthWorker.jobTitle = 'nurse'
AND PublicHealthWorker.personID = Person.personID
AND VaccinationFacility.facilityID = PublicHealthWorker.facilityID
AND VaccinationFacility.name = '$name'
ORDER BY PublicHealthWorker.salary DESC;";


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
  <title>Query 13</title>
</head>
<body>

<h2>Query 13</h2>

<h3> 3. For a given facility and on a given date, display the Nurses that work for the
    facility but are not assigned to the facility on the specified date.</h3>

<table border="2">
  <tr>
    
  <td>facility</td>
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
    <td><?php echo $data['name']; ?></td>
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


































































