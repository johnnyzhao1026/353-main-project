<?php 
 session_start();
 require_once '../connectdb.php';


$facilityName = $_POST['facilityName'];
$personID = $_POST['personID'];
$facilityJob = $_POST['facilityJob'];
$startDate = $_POST['startDate'];
$endtDate = $_POST['endtDate'];

$facilityName1 = $_POST['timeTo'];
$facilityJob2 = $_POST['facilityJob2'];
$startTime = $_POST['timeTo'];
$endTime = $_POST['timeTo'];




// query
 $sql_query = "SELECT Person.$personID, VaccinationFacility.$facilityName,PublicHealthWorker.$facilityJob, PublicHealthWorker.$startDate, PublicHealthWorker.$endtDate
 FROM Person, PublicHealthWorker, VaccinationFacility
 WHERE Person.$personID = PublicHealthWorker.personID AND PublicHealthWorker.facilityID = VaccinationFacility.facilityID";

      mysqli_query($conn,$sql_query);

 $sql_query1 = "SELECT Person.$personID, VaccinationFacility.$facilityName1,
 Avaliablity.$startTime, Avaliablity.$endTime
 FROM Person, VaccinationFacility, PublicHealthWorker, Avaliablity
 WHERE Person.$personID = PublicHealthWorker.personID AND PublicHealthWorker.facilityID = VaccinationFacility.facilityID 
 AND VaccinationFacility.facilityID = Avaliablity.facilityID AND PublicHealthWorker.$facilityJob2 = 'nurse'";


  header("Location: ./create.php?create=success");
?> 