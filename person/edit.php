


<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
  echo "Edit page";
  $personID = $_GET["id"];


  $sql_query = "select * from person where person.personID = '$personID'";
  $person = mysqli_query($conn,$sql_query);

  $sql_query_infectionhistory = "select * 
                                  from infectedhistory
                                  where infectedhistory.personID = '$personID'";

  $infectedHistory = mysqli_query($conn,$sql_query_infectionhistory);
  // if($person)
  // echo "get person information successfully";

}



?>






<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div><h1>Edit person</h1>
    
    <form action ="./updatePerson.php" method ="post">
    
    <?php
    while($data = mysqli_fetch_array($person))
    { ?>
    <label> <b>First Name</b> </label><br>
      <input type=text placeholder="please enter first name..." name='firstName' required value="<?=$data['firstName']?>"> </input><br>
    
      <label> <b>Last Name</b> </label><br>
      <input type=text placeholder="please enter last name..." name='lastName' required value="<?=$data['lastName']?>"> </input><br>
     
      <label> <b>Middle initial</b> </label><br>
      <input type=text placeholder="please enter middle initial..." name=' middleInitial' required value="<?=$data['middleInitial']?>"> </input><br>
    
      <label> <b>Age</b> </label><br>
      <input type=text placeholder="please enter age..." name='age' required value="<?=$data['age']?>"> </input><br>
    
      <label> <b>Age Group</b> </label><br>
      <input type=text placeholder="please enter age group..." name='ageGroup' required value="<?=$data['ageGroup']?>"> </input><br>
    
      <label> <b>Phone Number</b> </label><br>
      <input type=text placeholder="please enter phone number..." name='phoneNumber' required value="<?=$data['phoneNumber']?>"> </input><br>
    
      <label> <b>Address</b> </label><br>
      <input type=text placeholder="please enter address..." name='address' required value="<?=$data['address']?>"> </input><br>
    
      <label> <b>Date of Birth</b> </label><br>
      <input type=text placeholder="YYYY-MM-DD" name='dateOfBirth' required value="<?=$data['dateOfBirth']?>"> </input><br>
    
      <label> <b>Email Address</b> </label><br>
      <input type=text placeholder="please enter email..." name='email' required value="<?=$data['email']?>"> </input><br>
     
      <label> <b>City</b> </label><br>
      <input type=text placeholder="please enter city..." name='city' required value="<?=$data['city']?>"> </input><br>
    
      <label> <b>Province</b> </label><br>
      <input type=text placeholder="please enter province..." name='province' required value="<?=$data['province']?>"> </input><br>
    
      <label> <b>Postal Code</b> </label><br>
      <input type=text placeholder="please enter postal code..." name='postalCode' required value="<?=$data['postalCode']?>"> </input><br>
    
     
      <label> <b>Citizenship</b> </label><br>
      <input type=text placeholder="please enter citizenship..." name='citizenship' required value="<?=$data['citizenship']?>"> </input><br>
    
      <label> <b>Passport</b> </label><br>
      <input type=text placeholder="please enter passport number..." name='passportNum' required value="<?=$data['passportNum']?>"> </input><br>
    
      <label> <b>Medical Card</b> </label><br>
      <input type=text placeholder="please enter medical card number..." name='mediCardNum' required value="<?=$data['mediCardNum']?>"> </input><br>
    
      <label> <b>Issued Date</b> </label><br>
      <input type=text placeholder="please enter issued date..." name='issuedDateMediCard' required value="<?=$data['issuedDateMediCard']?>"> </input><br>
    
      <label> <b>Exp Date</b> </label><br>
      <input type=text placeholder="please enter expire date..." name='expDateMediCard' required value="<?=$data['expDateMediCard']?>"> </input><br>
    
      <label> <b>Registered</b> </label><br>
      <input type=text placeholder="Do you registered in system..." name='isRegistered' required value="<?=$data['isRegistered']?>"> </input><br>
      


      <!-- key -->
      <input type="hidden" name='personID' required id="id" value="<?=$data["personID"]?>"> </input><br>

      <?php 
    }
    ?>
     </div>

      
     <!--Edit infected history -->
     <div>

     <table>
       <tr>
         <td><b>Infected time</b></td>
         <td><b>Infection Date</b></td>
         <td><b>infected Type ID</b></td>
       </tr>
     
      <?php
    while($data = mysqli_fetch_array($infectedHistory))
    { ?>
      <tr>
        <td><input type=text name='infectedTimes'  value="<?=$data['infectedTimes']?>"> </input></td>
        <td><input type=text name='dateOfInfection'  value="<?=$data['dateOfInfection']?>"> </input></td>
        <td><input type=text name='infectedTypeID'  value="<?=$data['infectedTypeID']?>"> </input></td>
      </tr>
  
  <?php
  }
 ?>
        </table>
  </div>


    <button type="submit">Update</button>
    </form>
    <br>
    
    <a href="./per.php">Back to Person Records page</a>
    </body>
    
  


</html>

