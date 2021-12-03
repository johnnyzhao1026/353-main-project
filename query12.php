<?php

// connect to db
include_once 'connectdb.php';

  
  $sql_query = "SELECT Avaliablity.avaliableSpot, Avaliablity.avaliableTimeFrom, Avaliablity.date AS ava_date, 
  Province.provinceName AS province_name, VaccinationFacility.`name` AS facility_name
  FROM Avaliablity, Province, VaccinationFacility
  WHERE Avaliablity.facilityID = VaccinationFacility.facilityID 
  AND VaccinationFacility.provinceID = Province.provinceID";

   

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
  <title>Query 12</title>
</head>

<body>

<h2>Query 12</h2>

<h3> Display the first available spot for vaccination in a given facility starting from a given date</h3>


<?php

  while($data = mysqli_fetch_array($result))
{
?>

  <p>First avaliable spot at <?php echo $data['province_name']; ?> <?php echo $data['facility_name']; ?> facility starting <?php echo $data['ava_date']; ?> is from <?php echo $data['avaliableTimeFrom']; ?></p>
  	
<?php
}
?>
</table>
<br>



<h3><a href="./index.php">Back to main page</a></h3>
</body>
</html>