<?php 
require_once '../connectdb.php';

    $typeName = $_POST['typeName'];
    $approvedDate = $_POST["approvedDate"];
    $status = $_POST["status"];
    $dateOfSuspension = $_POST["dateOfSuspension"];

    

    // query
      $sql_query = "update vaccination set typeName = '$typeName',approvedDate = '$approvedDate',status = '$status',dateOfSuspension = '$dateOfSuspension'
          
          where vaccination.typeName = '$typeName';";
        
        
      mysqli_query($conn,$sql_query);

      header("Location: ./vaccination.php?create=success");

?>