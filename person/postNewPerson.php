<?php require_once '../connectdb.php';

    echo "new person information created successfully";

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
    
    // insert into infected history
    $infectedTimes = $_POST["infectedTimes"];
    $dateOfInfection = $_POST["dateOfInfection"];
    $infectedTypeID = $_POST["infectedTypeID"];
    $personID = $_POST["personID"];

    // query
      $sql_query = "insert INTO person(personID,firstName,lastName,middleInitial,dateOfBirth,
          age,ageGroup,phoneNumber,address,email,city,province,postalCode,
          citizenship,passportNum,mediCardNum,issuedDateMediCard,expDateMediCard,isRegistered)
          values ('$personID','$firstName','$lastName','$middleInitial','$birth','$age','$ageGroup','$phone','$address','$email'
          ,'$city','$province','$postalCode','$citizenship','$passport','$mediCard','$issuedDate','$expDate','$isRegistered');";

      mysqli_query($conn,$sql_query);

      $sql_query_infectedhistory = "insert into infectedhistory(personID,infectedTimes,dateOfInfection,infectedTypeID)
                                    values('$personID','$infectedTimes','$dateOfInfection','$infectedTypeID');";

                                       
    mysqli_query($conn,$sql_query_infectedhistory);

      header("Location: ./create.php?create=success");

?>