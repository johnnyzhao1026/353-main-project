<?php 
require_once '../connectdb.php';

    $ageGroup = $_POST['ageGroup'];
    $min = $_POST["min"];
    $max = $_POST["max"];
    $oldGroupID = $_POST["oldID"];

    //query
      $sql_query = "update groupage set ageGroup = '$ageGroup',min = '$min',max = '$max'
          
                    where groupage.ageGroup = '$oldGroupID';";
        
        
      mysqli_query($conn,$sql_query);

      header("Location: ./age.php?create=success");
?>