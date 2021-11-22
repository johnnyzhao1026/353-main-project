<?php require_once '../connectdb.php';

if(isset($_GET["deleteId"])){
    echo "this is delete page";
    $personID = $_GET["deleteId"];

    $sql_query = "Delete from person where person.personID = '$personID'";
   $result = mysqli_query($conn,$sql_query);

   $sql_query_infectionHistory = "Delete from infectedhistory where infectedhistory.personID = '$personID'";
   $result_infectionHistory = mysqli_query($conn,$sql_query_infectionHistory);
    
    if ($result && $result_infectionHistory){
        header("Location: ./per.php");
    }
    else echo "delete failed";
    
}


?>