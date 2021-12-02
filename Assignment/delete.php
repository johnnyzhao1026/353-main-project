<?php require_once '../connectdb.php';

if(isset($_GET["deleteId"])){
    echo "this is delete page";
    $personID = $_GET["deleteId"];

    $sql_query = "Delete from appointment where AppointmentInformation.personID = '$personID'";
   $result = mysqli_query($conn,$sql_query);

    if ($result){
        header("Location: ./book.php");
    }
    else echo "delete failed";
}
?>