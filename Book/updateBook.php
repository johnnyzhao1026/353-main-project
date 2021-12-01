<?php 
require_once '../connectdb.php';

    $facilityID = $_POST['facilityID'];
    $personID = $_POST["personID"];
    $vaccinationType = $_POST["vaccinationType"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $timeTo = $_POST["timeTo"];

    //query
      $sql_query = "update AppointmentInformation set facilityID = $facilityID, personID = $personID, vaccinationType = $vaccinationType, date = $date, time = $time, timeTo = $timeTo
    where personID = $personID";
        
        
      mysqli_query($conn,$sql_query);

      header("Location: ./book.php?create=success");
?>