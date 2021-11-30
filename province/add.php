
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProvince</title>
</head>
<body>


<h1>Add province</h1>
    
<form action ="./postNewProvince.php" method ="post">

  <label> <b>Province ID</b> </label><br>
  <input type=text placeholder="please enter ID" name='provinceID' required> </input><br>

  <label> <b> Province</b> </label><br>
  <input type=text placeholder="please enter province" name='provinceName' required> </input><br>

  
  <label> <b>Allowed GroupID</b> </label><br>
  <input type=text placeholder="please enter group ID" name='allowedAgeGroup' required> </input><br>



<button type="submit">Add</button>
</form>



<a href="./province.php">Back to province</a>
</body>
</html>


                           
