<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
    $facilityID = $_GET["id"];

    $sql_query = "Delete from VaccinationFacility where facilityID = '$facilityID'";
   $result = mysqli_query($conn,$sql_query);


    if ($result){
        header("Location: ./facility.php");
    }
    else echo "delete failed";
    
}


?>