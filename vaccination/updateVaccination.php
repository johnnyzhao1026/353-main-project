<?php 
require_once '../connectdb.php';

    $typeName = $_POST['typeName'];
    $approvedDate = $_POST["approvedDate"];
    $status = $_POST["status"];
    $dateOfSuspension = $_POST["dateOfSuspension"];
    $oldTypeName = $_POST['oldTypeName'];
    

    // query
      $sql_query = "update vaccination set typeName = '$typeName',approvedDate = '$approvedDate',status = '$status',dateOfSuspension = '$dateOfSuspension'
          
          where vaccination.typeName = '$oldTypeName';";
        
        
      mysqli_query($conn,$sql_query);

      header("Location: ./vaccination.php?create=success");

?>