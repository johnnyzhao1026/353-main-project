<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create infection</title>
</head>
<body>


<h1>Add Infection</h1>
    
<form action ="./postNewInfection.php" method ="post">

 
  <label> <b>Vaccination typeID</b> </label><br>
  <input type=text placeholder="please enter Infection type ID" name='infectedTypeID' required> </input><br>

  
  <label> <b>Infected Type name</b> </label><br>
  <input type=text placeholder="please enter infected Type Name" name='infectedTypeName' required> </input><br>

<button type="submit">Add</button>
</form>



<a href="./infection.php">Back to main page</a>




</body>
</html>



