<?php 
require_once '../connectdb.php';

$facilityName = $_POST['facilityName'];
$personID = $_POST['personID'];
$jobTitle = $_POST['jobTitle'];
$startWorkDate = $_POST['startWorkDate'];
$endWorkDate = $_POST['endWorkDate'];
$facilityID = $_POST['facilityID'];
    

    //query
      $sql_query = "UPDATE Assignment SET personID = $personID, facilityName = $facilityName, jobTitle
      = $jobTitle, startWorkDate = $startWorkDate, endWorkDate = $endWorkDate, facilityID = $facilityID
      WHERE Assignment.personID = '$personID'";       
      mysqli_query($conn,$sql_query);

      header("Location: ./assignment.php?create=success");
?>