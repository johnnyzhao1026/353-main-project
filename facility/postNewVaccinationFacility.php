 <?php 
 session_start();
 require_once '../connectdb.php';


$facilityID = $_POST["facilityID"];
$name = $_POST["name"];
$address = $_POST["address"];
$phoneNum = $_POST["phoneNum"];
$website = $_POST["website"];
$faclityType = $_POST["faclityType"];
$capacity = $_POST["capacity"];
$city = $_POST["city"];
$country = $_POST["country"];
$provinceID = $_POST["provinceID"];
$normalDayStartTime = $_POST["normalDayStartTime"];
$normalDayEndTime = $_POST["normalDayEndTime"];
$specialDayStartTime = $_POST["specialDayStartTime"];
$specialDayEndTime = $_POST["specialDayEndTime"];
$acceptWalkInAppointment = $_POST["acceptWalkInAppointment"];


// query
  $sql_query = "insert INTO VaccinationFacility(facilityID,name,address,phoneNum,website,faclityType,capacity,city,country,provinceID,normalDayStartTime,normalDayEndTime,specialDayStartTime,specialDayEndTime,acceptWalkInAppointment)
      values ('$facilityID','$name','$address','$phoneNum','$website','$faclityType','$capacity','$city','$country','$provinceID','$normalDayStartTime','$normalDayEndTime','$specialDayStartTime','$specialDayEndTime','$acceptWalkInAppointment');";
  mysqli_query($conn,$sql_query);


  header("Location: ./create.php?create=success");
?> 