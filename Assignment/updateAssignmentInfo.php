<?php 
require_once '../connectdb.php';

    $personID = $_POST['personID'];
    $facilityName = $_POST["facilityName"];
    $jobTitle = $_POST["jobTitle"];
    $startWorkDate = $_POST["startWorkDate"];
    $endWorkDate = $_POST["endWorkDate"];
    

    //query
      $sql_query = "update Person set personID = $personID";       
      mysqli_query($conn,$sql_query);

      $sql_query1 = "update VaccinationFacility set name = $facilityName";       
      mysqli_query($conn,$sql_query1);

      $sql_query2 = "update PublicHealthWorker set jobTitle = $jobTitle, startWorkDate = $startWorkDate, endWorkDate = $endWorkDate";       
      mysqli_query($conn,$sql_query2);

?>