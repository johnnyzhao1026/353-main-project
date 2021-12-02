<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PublicHealthWorker</title>
</head>
<body>
<h1>Add Public Health Worker</h1>
    
<form action ="./postNewPublicHealthWorker.php" method ="post">
 
  <label> <b>job ID</b> </label><br>
  <input type=text placeholder="please enter job ID" name='jobID' required> </input><br>
  
  <label> <b>job Title</b> </label><br>
  <input type=text placeholder="please enter job Title" name='jobTitle' required> </input><br>
  <label> <b>start Work Date</b> </label><br>
  <input type=text placeholder="please enter start Work Date" name='startWorkDate' required> </input><br>
  <label> <b>end Work Date</b> </label><br>
  <input type=text placeholder="please enter end Work Date" name='endWorkDate' required> </input><br>
  <label> <b>facility ID</b> </label><br>
  <input type=text placeholder="please enter facility ID" name='facilityID' required> </input><br>
  <label> <b>person ID</b> </label><br>
  <input type=text placeholder="please enter person ID" name='personID' required> </input><br>
  <label> <b>salary</b> </label><br>
  <input type=text placeholder="please enter salary" name='salary' required> </input><br>
<button type="submit">Add</button>
</form>
<a href="./employee.php">Back to Public Health Worker record</a>
</body>
</html>
