<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
    $typeID = $_GET["id"];

    $sql_query = "Delete from infectedtype where infectedTypeID = '$typeID'";
   $result = mysqli_query($conn,$sql_query);


    if ($result){
        header("Location: ./infection.php");
    }
    else echo "delete failed";
    
}


?>