
<?php

include_once 'connectdb.php';

//$today = date("Y-m-d");

$sql_query = " SELECT Person.firstName,Person.lastName,Person.middleInitial,Person.city
FROM AppointmentInformation,Person
WHERE AppointmentInformation.personID =  Person.personID" ;


$result = mysqli_query($conn,$sql_query);
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
  <title>Query 16</title>
</head>
<body>

<h2>Query 16</h2>

<h3> Perform a vaccine to a person with an appointment.</h3>

<table border="2">
  <tr>

      <td>id</td>
      <td>first name</td>
      <td>last name</td>
      <td>middle name</td>
      <td>location</td>
    
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here



while($data = mysqli_fetch_array($result))
{
?>
  <tr>
    <td><?php echo $data['firstName']; ?></td>
    <td><?php echo $data['lastName']; ?></td>
    <td><?php echo $data['middleInitial']; ?></td>
      <td><?php echo $data['city']; ?></td>



  </tr>	
<?php
}
?>
</table>

</body>
</html>









