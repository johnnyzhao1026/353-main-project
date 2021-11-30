 
 <?php 
 session_start();
 require_once '../connectdb.php';


$provinceID = $_POST['provinceID'];
$provinceName = $_POST["provinceName"];
$allowedAgeGroup = $_POST["allowedAgeGroup"];



// query
  $sql_query = "insert INTO province(provinceID,provinceName,allowedAgeGroup)
      values ('$provinceID','$provinceName',$allowedAgeGroup);";
  mysqli_query($conn,$sql_query);


  header("Location: ./add.php?create=success");
?> 