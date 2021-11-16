
<?php require_once '../database.php';

$statement = $conn->prepare("select id, medcard, first_name, last_name, birth, address, city, province, 
phone, postal_code, email, citizenship from main.person as person where person.id = :id");
$statement->bindParam(":id",$_GET["id"]);
$statement->execute();
$person = $statement->fetch(PDO::FETCH_ASSOC);



if (isset($_POST["medcard"])&&isset($_POST["first_name"])&&isset($_POST["last_name"])
   &&isset($_POST["birth"])&&isset($_POST["phone"])&&isset($_POST["address"])&&isset($_POST["city"])&&isset($_POST["province"])
   &&isset($_POST["postal_code"])&&isset($_POST["email"])&&isset($_POST["citizenship"]) && isset($_POST["id"])   ) {

    $statement = $conn->prepare("update main.person set medcard = :medcard,first_name = :first_name,last_name = :last_name,birth=:birth,
    phone=:phone,province=:province,address=:address,city=:city,postal_code=:postal_code,email=:email,citizenship=:citizenship where 
    id = :id;"
   );
    


$statement->bindParam(':medcard', $_POST["medcard"]);
$statement->bindParam(':first_name', $_POST["first_name"]);
$statement->bindParam(':last_name', $_POST["last_name"]);
$statement->bindParam(':birth', $_POST["birth"]);
$statement->bindParam(':address', $_POST["address"]);
$statement->bindParam(':city', $_POST["city"]);
$statement->bindParam(':province', $_POST["province"]);
$statement->bindParam(':phone', $_POST["phone"]);
$statement->bindParam(':postal_code', $_POST["postal_code"]);
$statement->bindParam(':email', $_POST["email"]);
$statement->bindParam(':citizenship', $_POST["citizenship"]);
$statement->bindParam(':id', $_POST["id"]);


if($statement->execute()) {
    header("Location: .");}
    else{
    header("Location: ./edit.php?id=".$_POST["id"]);

    }


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

<h1>Edit person</h1>
    
<form action ="./edit.php" method ="post">

  
  <label> <b>Medical card number</b> </label><br>
  <input type=text placeholder="please enter medical card number..." name='medcard' id="medcard" value="<?=$person["medcard"]?>"> </input><br>

  <label> <b>First Name</b> </label><br>
  <input type=text placeholder="please enter first name..." name='first_name' required id="first_name" value="<?=$person["first_name"]?>"> </input><br>

  <label> <b>Last Name</b> </label><br>
  <input type=text placeholder="please enter last name..." name='last_name' required id="last_name" value="<?=$person["last_name"]?>"> </input><br>

  <label> <b>Date of Birth</b> </label><br>
  <input type=text placeholder="YYYY-MM-DD" name='birth' required id="birth" value="<?=$person["birth"]?>"> </input><br>

  <label> <b>Phone Number</b> </label><br>
  <input type=text placeholder="please enter phone number..." name='phone' required id="phone" value="<?=$person["phone"]?>"> </input><br>

  <label> <b>Address</b> </label><br>
  <input type=text placeholder="please enter address..." name='address' required id="address" value="<?=$person["address"]?>"> </input><br>

  <label> <b>City</b> </label><br>
  <input type=text placeholder="please enter city..." name='city' required id="city" value="<?=$person["city"]?>"> </input><br>

  <label> <b>Province</b> </label><br>
  <input type=text placeholder="please enter province..." name='province' required id="province" value="<?=$person["province"]?>"> </input><br>

  <label> <b>Postal Code</b> </label><br>
  <input type=text placeholder="please enter postal code..." name='postal_code' required id="postal_code" value="<?=$person["postal_code"]?>"> </input><br>

  <label> <b>Email Address</b> </label><br>
  <input type=text placeholder="please enter email..." name='email' required id="email" value="<?=$person["email"]?>"> </input><br>

  <label> <b>Citizenship</b> </label><br>
  <input type=text placeholder="please enter citizenship..." name='citizenship' required id="citizenship" value="<?=$person["citizenship"]?>"> </input><br>


  
  <input type="hidden" name='id' required id="id" value="<?=$person["id"]?>"> </input><br>

<button type="submit">Update</button>
</form>


<a href="./">Back to main page</a>
</body>
</html>