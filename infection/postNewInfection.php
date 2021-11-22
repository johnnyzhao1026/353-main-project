 
 <?php 
 session_start();
 require_once '../connectdb.php';


$infectedTypeID = $_POST['infectedTypeID'];
$infectedTypeName = $_POST["infectedTypeName"];


// query
  $sql_query = "insert INTO infectedtype(infectedTypeID,infectedTypeName)
      values ('$infectedTypeID','$infectedTypeName');";
  mysqli_query($conn,$sql_query);


  header("Location: ./create.php?create=success");
?> 