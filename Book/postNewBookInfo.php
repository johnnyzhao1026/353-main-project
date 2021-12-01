 <?php 
 session_start();
 require_once '../connectdb.php';


$facilityID = $_POST['facilityID'];
$personID = $_POST['personID'];
$vaccinationType = $_POST['vaccinationType'];
$date = $_POST['appointmentDate'];
$time = $_POST['time'];
$timeTo = $_POST['timeTo'];



// query
 $sql_query1 = "select AppointmentInformation.$facilityID, AppointmentInformation.$personID,  AppointmentInformation.$vaccinationType, AppointmentInformation.$date, AppointmentInformation.$time, AppointmentInformation.$timeTo
 from AppointmentInformation, Person, Province, VaccinationFacility
 where AppointmentInformation.$personID = Person.personID and Person.ageGroup = Province.allowedAgeGroup and Province.provinceID = VaccinationFacility.provinceID and VaccinationFacility.facilityID = AppointmentInformation.facilityID";

  
  
      mysqli_query($conn,$sql_query1);


  header("Location: ./create.php?create=success");
?> 

