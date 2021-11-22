<?php 
require_once '../connectdb.php';

    $ageGroup = $_POST['ageGroup'];
    $min = $_POST["min"];
    $max = $_POST["max"];

    //query
      $sql_query = "update groupage set ageGroup = '$ageGroup',min = '$min',max = '$max'
          
                    where groupage.ageGroup = '$ageGroup';";
        
        
      mysqli_query($conn,$sql_query);

      header("Location: ./age.php?create=success");
?>