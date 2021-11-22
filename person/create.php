<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Add person</h1>
    
<form action ="./postNewPerson.php" method ="POST">
 
<label> <b>person ID</b> </label><br>
  <input type=text placeholder="please enter id..." name='personID' required> </input><br>

  <label> <b>First Name</b> </label><br>
  <input type=text placeholder="please enter first name..." name='firstName' required> </input><br>

  <label> <b>Last Name</b> </label><br>
  <input type=text placeholder="please enter last name..." name='lastName' required> </input><br>
 
  <label> <b>Middle initial</b> </label><br>
  <input type=text placeholder="please enter middle initial..." name=' middleInitial' required> </input><br>

  <label> <b>Age</b> </label><br>
  <input type=text placeholder="please enter age..." name='age' required> </input><br>

  <label> <b>Age Group</b> </label><br>
  <input type=text placeholder="please enter age group..." name='ageGroup' required> </input><br>

  <label> <b>Phone Number</b> </label><br>
  <input type=text placeholder="please enter phone number..." name='phoneNumber' required> </input><br>

  <label> <b>Address</b> </label><br>
  <input type=text placeholder="please enter address..." name='address' required> </input><br>

  <label> <b>Date of Birth</b> </label><br>
  <input type=text placeholder="YYYY-MM-DD" name='dateOfBirth' required> </input><br>

  <label> <b>Email Address</b> </label><br>
  <input type=text placeholder="please enter email..." name='email' required> </input><br>
 
  <label> <b>City</b> </label><br>
  <input type=text placeholder="please enter city..." name='city' required> </input><br>

  <label> <b>Province</b> </label><br>
  <input type=text placeholder="please enter province..." name='province' required> </input><br>

  <label> <b>Postal Code</b> </label><br>
  <input type=text placeholder="please enter postal code..." name='postalCode' required> </input><br>

  <label> <b>Citizenship</b> </label><br>
  <input type=text placeholder="please enter citizenship..." name='citizenship' required> </input><br>

  <label> <b>Passport</b> </label><br>
  <input type=text placeholder="please enter passport number..." name='passportNum' required> </input><br>

  <label> <b>Medical Card</b> </label><br>
  <input type=text placeholder="please enter medical card number..." name='mediCardNum' required> </input><br>

  <label> <b>Issued Date</b> </label><br>
  <input type=text placeholder="please enter issued date..." name='issuredDateMediCard' required> </input><br>

  <label> <b>Exp Date</b> </label><br>
  <input type=text placeholder="please enter expire date..." name='expDateMediCard' required> </input><br>

  <label> <b>Registered</b> </label><br>
  <input type=text placeholder="Do you registered in system..." name='isRegistered' required> </input><br>

  <div>
      <table>
          <tr>
              <td>Infected times</td>
              <td>Infection date</td>
              <td>Infected Type ID</td>
          </tr>

          <tr>
              <td><input type=text name='infectedTimes'  placeholder="1-3"> </input></td>
              <td><input type=text name='dateOfInfection' placeholder="YYYY-MM-DD" > </input></td>
              <td><input type=text name='infectedTypeID' placeholder="between 1-5" > </input></td>
          </tr>

          <tr>
              <td><input type=text name='infectedTimes'  placeholder="1-3"> </input></td>
              <td><input type=text name='dateOfInfection' placeholder="YYYY-MM-DD" > </input></td>
              <td><input type=text name='infectedTypeID' placeholder="between 1-5" > </input></td>
          </tr>

          <tr>
              <td><input type=text name='infectedTimes'  placeholder="1-3"> </input></td>
              <td><input type=text name='dateOfInfection' placeholder="YYYY-MM-DD" > </input></td>
              <td><input type=text name='infectedTypeID' placeholder="between 1-5" > </input></td>
          </tr>
      </table>
  </div>

<button type="submit">Add</button>
</form>




<a href="./per.php">Back to main page</a>
</body>
</html>