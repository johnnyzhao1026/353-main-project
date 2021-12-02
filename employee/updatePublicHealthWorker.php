<?php 
require_once '../connectdb.php';

    $jobID = $_POST['jobID'];
    $jobTitle = $_POST['jobTitle'];
    $startWorkDate = $_POST['startWorkDate'];
    $endWorkDate = $_POST['endWorkDate'];
    $facilityID = $_POST['facilityID'];
    $personID = $_POST['personID'];
    $salary = $_POST['salary'];
    $oldID = $_POST["oldID"];

    //query
      $sql_query = "update PublicHealthWorker set jobTitle = '$jobTitle',startWorkDate = '$startWorkDate',endWorkDate = '$endWorkDate',jobID = '$jobID',facilityID = '$facilityID',personID = '$personID',salary = '$salary'
											where PublicHealthWorker.jobID = '$oldID';
											";
        
        
      mysqli_query($conn,$sql_query);

      header("Location: ./employee.php?create=success");
?>