<?php require_once '../connectdb.php';

    echo "Update person information successfully";

    $firstName = $_POST['firstName'];
    $lastName = $_POST["lastName"];
    $middleInitial = $_POST["middleInitial"];
    $birth = $_POST["dateOfBirth"];
    $age = $_POST["age"];
    $ageGroup = $_POST["ageGroup"];
    $phone = $_POST["phoneNumber"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $province= $_POST["province"];
    $postalCode = $_POST["postalCode"];
    $citizenship = $_POST["citizenship"];
    $passport = $_POST["passportNum"];
    $mediCard = $_POST["mediCardNum"];
    $issuedDate = $_POST["issuedDateMediCard"];
    $expDate= $_POST["expDateMediCard"];
    $isRegistered= $_POST["isRegistered"];
    // edit infected history
    $infectedTimes = $_POST["infectedTimes"];
    $dateOfInfection = $_POST["dateOfInfection"];
    $infectedTypeID = $_POST["infectedTypeID"];

    $personID = $_POST["personID"];

    // query
      $sql_query = "update person set firstName = '$firstName',lastName = '$lastName',middleInitial = '$middleInitial',dateOfBirth = '$birth',
          age = '$age',ageGroup = '$ageGroup',phoneNumber = '$phone',address = '$address',email = '$email',city = '$city',province = '$province',postalCode = '$postalCode',
          citizenship = '$citizenship',passportNum = '$passport',mediCardNum = '$mediCard',issuedDateMediCard = '$issuedDate',expDateMediCard = '$expDate',isRegistered = '$isRegistered'
          
          where person.personID = '$personID';";
        
          $sql_query_infectedhistory = "update infectedhistory set infectedTimes = '$infectedTimes',dateOfInfection = '$dateOfInfection',
                                        infectedTypeID = '$infectedTypeID'

                                        where infectedhistory.personID = '$personID';";
    
      mysqli_query($conn,$sql_query);
      mysqli_query($conn,$sql_query_infectedhistory);

      header("Location: ./per.php?create=success");

?>