<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
    echo "this is delete page";
    $personID = $_GET["id"];

    $sql_query = "Delete from publichealthworker where publichealthworker.personID = '$personID'";
   $result = mysqli_query($conn,$sql_query);

    if ($result){
        header("Location: ./assignment.php");
    }
    else echo "delete failed";
}
?>
