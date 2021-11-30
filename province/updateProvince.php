<?php 
require_once '../connectdb.php';


    $provinceID = $_POST["provinceID"];
    $provinceName = $_POST["provinceName"];
    $ageGroup = $_POST["allowedAgeGroup"];
    $oldID = $_POST["oldID"];

    //query
      $sql_query = "update province set provinceID = '$provinceID', provinceName = '$provinceName',allowedAgeGroup = '$ageGroup'
          
                    where province.provinceID = '$oldID';";
        
        
      mysqli_query($conn,$sql_query);

      header("Location: ./province.php?create=success");
?>