<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create vaccination</title>
</head>
<body>


<h1>Add vaccination</h1>
    
<form action ="./postNewVaccination.php" method ="post">

 
  <label> <b>Vaccination type</b> </label><br>
  <input type=text placeholder="please enter vaccination type" name='typeName' required> </input><br>

  
  <label> <b>Status</b> </label><br>
  <input type=text placeholder="please enter status" name='status' required> </input><br>

  <label> <b>Date suspend</b> </label><br>
  <input type=text placeholder="YYYY-MM-DD" name='dateOfSuspension' > </input><br>

  
  <label> <b>Date approval</b> </label><br>
  <input type=text placeholder="YYYY-MM-DD" name='approvedDate' > </input><br>




<button type="submit">Add</button>
</form>



<a href="./vaccination.php">Back to main page</a>




</body>
</html>



