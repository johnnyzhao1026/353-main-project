<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Age Group</title>
</head>
<body>


<h1>Add Age Group</h1>
    
<form action ="./postNewAgeGroup.php" method ="post">

 
  <label> <b>Age Group</b> </label><br>
  <input type=text placeholder="please enter age group" name='ageGroup' required> </input><br>

  
  <label> <b>min age</b> </label><br>
  <input type=text placeholder="please enter min age" name='min' required> </input><br>

  <label> <b>max age</b> </label><br>
  <input type=text placeholder="please enter max age" name='max' required> </input><br>


<button type="submit">Add</button>
</form>



<a href="./age.php">Back to age record</a>




</body>
</html>



                  
