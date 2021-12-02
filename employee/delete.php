<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
    $jobID = $_GET["id"];

    $sql_query = "Delete from PublicHealthWorker where jobID = '$jobID'";
   $result = mysqli_query($conn,$sql_query);


    if ($result){
        header("Location: ./employee.php");
    }
    else echo "delete failed";
    
}


?>