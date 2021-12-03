<?php 
 session_start();
 require_once '../connectdb.php';


$facilityName = $_POST['facilityName'];
$personID = $_POST['personID'];
$jobTitle = $_POST['jobTitle'];
$startDate = $_POST['startDate'];
$endtDate = $_POST['endtDate'];
$facilityID = $_POST['facilityID'];





// query
 $sql_query = "INSERT into Assignment (personID, facilityName, jobTitle,
 startWorkDate,endWorkDate, facilityID)
  values ('$personID', '$facilityName'
 '$jobTitle', '$startDate', '$endtDate', '$facilityID');";

      mysqli_query($conn,$sql_query);

  header("Location: ./assignment.php?create=success");
?> 