<?php 
require_once '../connectdb.php';

    $facilityID = $_POST['facilityID'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phoneNum = $_POST['phoneNum'];
    $website = $_POST['website'];
    $faclityType = $_POST['faclityType'];
    $capacity = $_POST['capacity'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $provinceID = $_POST['provinceID'];
    $normalDayStartTime = $_POST['normalDayStartTime'];
    $normalDayEndTime = $_POST['normalDayEndTime'];
    $specialDayStartTime = $_POST['specialDayStartTime'];
    $specialDayEndTime = $_POST['specialDayEndTime'];
    $acceptWalkInAppointment = $_POST['acceptWalkInAppointment'];

    //query
      $sql_query = "update VaccinationFacility set  facilityID= '$facilityID',name= '$name',address= '$address',phoneNum= '$phoneNum',website= '$website',faclityType= '$faclityType',capacity= '$capacity',city= '$city',country= '$country',provinceID= '$provinceID',normalDayStartTime= '$normalDayStartTime',normalDayEndTime= '$normalDayEndTime',specialDayStartTime= '$specialDayStartTime',specialDayEndTime= '$specialDayEndTime',acceptWalkInAppointment= '$acceptWalkInAppointment'
	where VaccinationFacility.facilityID = '$oldID';";
        
        
      mysqli_query($conn,$sql_query);

      header("Location: ./facility.php?create=success");
?>