<?php require_once '../connectdb.php';

if(isset($_GET["id"])){
  echo "Display page";
  $id = $_GET["id"];


  $sql_query = "select * 
                from person
                where person.personID = '$id'";
 
    $person = mysqli_query($conn,$sql_query);

    $sql_query_infectionhistory = "select * 
                                    from infectedhistory
                                    where infectedhistory.personID = '$id'";

$person = mysqli_query($conn,$sql_query);

$infectedHistory = mysqli_query($conn,$sql_query_infectionhistory);


}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display person</title>
</head>
<body>

<h4>Person Information</h4>
<table border="1" cellspacing="0" >
<tr style="background-color:lightgray;" align="center"  >
    <td>person ID</td>
    <td>first name</td>
    <td>last name</td>
    <td>middle initial</td>
    <td>date of birth</td>
    <td>age</td>
    <td>age group</td>
    <td>phone</td>
    <td>address</td>
    <td>email</td>
    <td>city</td>
    <td>province</td>
    <td>postal code</td>
    <td>citizenship</td>
    <td>passport number</td>
    <td>medicard number</td>
    <td>issued date of medical card</td>
    <td>exp date of medical card</td>
    <td>isRegistered</td>
    
    <!-- <td>infected Times</td>
    <td>Date of Infection</td>
    <td>Infected type ID</td> -->
    


  </tr>

<?php
while($data = mysqli_fetch_array($person))
{ ?>


<tr align="center" >
    <td><?php echo $data['personID']; ?></td>
    <td><?php echo $data['firstName']; ?></td>
    <td><?php echo $data['lastName']; ?></td>
    <td><?php echo $data['middleInitial']; ?></td>    
    <td><?php echo $data['dateOfBirth']; ?></td>  
    <td><?php echo $data['age']; ?></td>  
    <td><?php echo $data['ageGroup']; ?></td>  
    <td><?php echo $data['phoneNumber']; ?></td>  
    <td><?php echo $data['address']; ?></td>  
    <td><?php echo $data['email']; ?></td>  
    <td><?php echo $data['city']; ?></td>  
    <td><?php echo $data['province']; ?></td>  
    <td><?php echo $data['postalCode']; ?></td>  
    <td><?php echo $data['citizenship']; ?></td>  
    <td><?php echo $data['passportNum']; ?></td>  
    <td><?php echo $data['mediCardNum']; ?></td>  
    <td><?php echo $data['issuedDateMediCard']; ?></td>  
    <td><?php echo $data['expDateMediCard']; ?></td>  
    <td><?php echo $data['isRegistered']; ?></td> 
      


</tr>  
</table>
<br>
<?php
}
?>

<!-- infection histion -->
<h4>Infection History</h4>
<table border="1" cellspacing="0" >
    <tr style="background-color:lightgray;" align="center">
        <td>infected times</td>
        <td>Infection Date</td>
        <td>infected Type ID</td>
    </tr>

<?php
while($data = mysqli_fetch_array($infectedHistory))
{ ?>

    <tr align="center">
        <td><?php echo $data['infectedTimes']; ?></td>
        <td><?php echo $data['dateOfInfection']; ?></td>
        <td><?php echo $data['infectedTypeID']; ?></td>
    </tr>

<?php
}
?>
</table>
<h3><a href="./per.php">Back to Person Records page</a></h3>
</body>
</html>