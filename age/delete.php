<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
    $ageGroup = $_GET["id"];

    $sql_query = "Delete from groupage where ageGroup = '$ageGroup'";
   $result = mysqli_query($conn,$sql_query);


    if ($result){
        header("Location: ./age.php");
    }
    else echo "delete failed";
    
}


?>


