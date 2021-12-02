<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Vaccination Facility</title>
</head>
<body>
<h1>Add Vaccination Facility</h1>
    
<form action ="./postNewVaccinationFacility.php" method ="post">
 
  <label> <b>facilityID</b> </label><br>
  <input type=text placeholder="please enter facilityID" name='facilityID' required> </input><br>
  
  <label> <b>name</b> </label><br>
  <input type=text placeholder="please enter name" name='name' required> </input><br>
  
  <label> <b>address</b> </label><br>
  <input type=text placeholder="please enter address" name='address' required> </input><br>
  
  <label> <b>phoneNum</b> </label><br>
  <input type=text placeholder="please enter phoneNum" name='phoneNum' required> </input><br>
  
  <label> <b>website</b> </label><br>
  <input type=text placeholder="please enter website" name='website' required> </input><br>
  
  <label> <b>faclityType</b> </label><br>
  <input type=text placeholder="please enter faclityType" name='faclityType' required> </input><br>
  
  <label> <b>capacity</b> </label><br>
  <input type=text placeholder="please enter capacity" name='capacity' required> </input><br>
  
  <label> <b>city</b> </label><br>
  <input type=text placeholder="please enter city" name='city' required> </input><br>
  
  <label> <b>country</b> </label><br>
  <input type=text placeholder="please enter country" name='country' required> </input><br>
  
  <label> <b>provinceID</b> </label><br>
  <input type=text placeholder="please enter provinceID" name='provinceID' required> </input><br>
  
  <label> <b>norma Day Start Time</b> </label><br>
  <input type=text placeholder="please enter normal Day Start Time" name='normalDayStartTime' required> </input><br>
  
  <label> <b>normal Day End Time</b> </label><br>
  <input type=text placeholder="please enter normal Day End Time" name='normalDayEndTime' required> </input><br>
  
  <label> <b>special Day Start Time</b> </label><br>
  <input type=text placeholder="please enter special Day Start Time" name='specialDayStartTime' required> </input><br>
  
  <label> <b>special Day End Time</b> </label><br>
  <input type=text placeholder="please enter special Day End Time" name='specialDayEndTime' required> </input><br>
  <label> <b>acceptWalkInAppointment</b> </label><br>
  <input type=text placeholder="please enter is it accept walk in appointment" name='acceptWalkInAppointment' required> </input><br>
  
<button type="submit">Add</button>
</form>
<a href="./facility.php">Back to Vaccination Facility record</a>
</body>
</html>
