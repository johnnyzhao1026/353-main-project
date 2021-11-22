 
 <?php 
 session_start();
 require_once '../connectdb.php';


$ageGroup = $_POST['ageGroup'];
$min = $_POST["min"];
$max = $_POST["max"];



// query
  $sql_query = "insert INTO groupage(ageGroup,min,max)
      values ('$ageGroup','$min',$max);";
  mysqli_query($conn,$sql_query);


  header("Location: ./create.php?create=success");
?> 