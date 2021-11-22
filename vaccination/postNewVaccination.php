
 
 <?php 
 session_start();
 require_once '../connectdb.php';


$typeName = $_POST['typeName'];
$approvedDate = $_POST["approvedDate"];
$status = $_POST["status"];
$dateOfSuspension = $_POST["dateOfSuspension"];

// query
  $sql_query = "insert INTO vaccination(typeName,approvedDate,status,dateOfSuspension)
      values ('$typeName','$approvedDate','$status','$dateOfSuspension');";
  mysqli_query($conn,$sql_query);


  header("Location: ./create.php?create=success");
?>    