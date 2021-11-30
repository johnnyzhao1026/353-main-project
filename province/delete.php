<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
    $provinceID = $_GET["id"];

    $sql_query = "Delete from province where provinceID = '$provinceID'";
   $result = mysqli_query($conn,$sql_query);


    if ($result){
        header("Location: ./province.php");
    }
    else echo "delete failed";
    
}


?>