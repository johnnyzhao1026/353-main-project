<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
    $typeName = $_GET["id"];

    $sql_query = "Delete from vaccination where typeName = '$typeName'";
   $result = mysqli_query($conn,$sql_query);


    if ($result){
        header("Location: ./vaccination.php");
    }
    else echo "delete failed";
    
}


?>