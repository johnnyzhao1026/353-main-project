<?php 
require_once '../connectdb.php';

    $infectionTypeID = $_POST['infectedTypeID'];
    $infectionTypeName = $_POST["infectedTypeName"];
   

    

    // query
      $sql_query = "update infectedtype set infectedTypeID = '$infectionTypeID',infectedTypeName = '$infectionTypeName'
          
          where infectedtype.infectedTypeID = '$infectionTypeID';";
        
        
      mysqli_query($conn,$sql_query);

      header("Location: ./infection.php?create=success");

?>