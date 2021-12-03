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
 $sql_query1 = "INSERT INTO AppointmentInformation (facilityID, personID, vaccinationType,
 date,time, timeTo)
  values ('$facilityID', '$personID'
 '$vaccinationType', '$date', '$time', '$timeTo')";
  
      mysqli_query($conn,$sql_query1);


  header("Location: ./book.php?create=success");
?> 

