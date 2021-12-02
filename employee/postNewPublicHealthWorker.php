 <?php 
 session_start();
 require_once '../connectdb.php';


$jobID = $_POST["jobID"];
$jobTitle = $_POST["jobTitle"];
$startWorkDate = $_POST["startWorkDate"];
$endWorkDate = $_POST["endWorkDate"];
$facilityID = $_POST["facilityID"];
$personID = $_POST["personID"];
$salary = $_POST["salary"];


// query
  $sql_query = "insert INTO PublicHealthWorker(jobTitle,startWorkDate,endWorkDate,jobID,facilityID,personID,salary)
      values ('$jobTitle','$startWorkDate','$endWorkDate','$jobID','$facilityID','$personID','$salary');";
  mysqli_query($conn,$sql_query);


  header("Location: ./create.php?create=success");
?> 