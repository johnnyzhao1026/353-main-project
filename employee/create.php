

<?php require_once '../database.php';

if (isset($_POST["id"])&&isset($_POST["EID"])&&  isset($_POST["SSN"])&&isset($_POST["medcard"])&&isset($_POST["first_name"])&&isset($_POST["last_name"])
   &&isset($_POST["birth"])&&isset($_POST["phone"])&&isset($_POST["province"])&&isset($_POST["address"])&&isset($_POST["city"])
   &&isset($_POST["postal_code"])&&isset($_POST["email"])&&isset($_POST["citizenship"])   ) {

    $employee = $conn->prepare("insert into main.employee (id,EID,SSN,medcard,first_name,last_name,birth,
    phone,province,address,city,postal_code,email,citizenship)
    values(:id,:EID,:SSN,:medcard,:first_name,:last_name,:birth,
    :phone,:province,:address,:city,:postal_code,:email,:citizenship);
    ");
    $employee->bindParam(':id', $_POST["id"]);
$employee->bindParam(':EID', $_POST["EID"]);
$employee->bindParam(':SSN', $_POST["SSN"]);
$employee->bindParam(':medcard', $_POST["medcard"]);
$employee->bindParam(':first_name', $_POST["first_name"]);
$employee->bindParam(':last_name', $_POST["last_name"]);
$employee->bindParam(':birth', $_POST["birth"]);
$employee->bindParam(':address', $_POST["address"]);
$employee->bindParam(':city', $_POST["city"]);
$employee->bindParam(':province', $_POST["province"]);
$employee->bindParam(':phone', $_POST["phone"]);
$employee->bindParam(':postal_code', $_POST["postal_code"]);
$employee->bindParam(':email', $_POST["email"]);
$employee->bindParam(':citizenship', $_POST["citizenship"]);

if($employee->execute())
    header("Location: .");




   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Add employee</h1>
    
<form action ="./create.php" method ="post">

<label> <b>ID</b> </label><br>
  <input type=text placeholder="please enter  ID" name='id' required> </input><br>

  <label> <b>EID</b> </label><br>
  <input type=text placeholder="please enter employee ID" name='EID' required> </input><br>

  <label> <b>SSN</b> </label><br>
  <input type=text placeholder="if do not have, enter null" name='SSN' required> </input><br>

  
  <label> <b>Medical card number</b> </label><br>
  <input type=text placeholder="please enter medical card number..." name='medcard' required> </input><br>

  <label> <b>First Name</b> </label><br>
  <input type=text placeholder="please enter first name..." name='first_name' required> </input><br>

  <label> <b>Last Name</b> </label><br>
  <input type=text placeholder="please enter last name..." name='last_name' required> </input><br>

  <label> <b>Date of Birth</b> </label><br>
  <input type=text placeholder="YYYY-MM-DD" name='birth' required> </input><br>

  <label> <b>Phone Number</b> </label><br>
  <input type=text placeholder="please enter phone number..." name='phone' required> </input><br>
 
  <label> <b>Province</b> </label><br>
  <input type=text placeholder="please enter province..." name='province' required> </input><br>

  <label> <b>Address</b> </label><br>
  <input type=text placeholder="please enter address..." name='address' required> </input><br>

  <label> <b>City</b> </label><br>
  <input type=text placeholder="please enter city..." name='city' required> </input><br>

  <label> <b>Postal Code</b> </label><br>
  <input type=text placeholder="please enter postal code..." name='postal_code' required> </input><br>

  <label> <b>Email Address</b> </label><br>
  <input type=text placeholder="please enter email..." name='email' required> </input><br>

  <label> <b>Citizenship</b> </label><br>
  <input type=text placeholder="please enter citizenship..." name='citizenship' required> </input><br>

<button type="submit">Add</button>
</form>


<a href="./">Back to main page</a>
</body>
</html>
