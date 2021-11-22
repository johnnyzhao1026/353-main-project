<?php
// connect to db
include_once '../connectdb.php';
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Person information</title>
</head>
<body>

<h2>Person Records</h2>

<h3> <a href="create.php">Create</a></h3>


<table border="1" cellspacing="0" >
  <tr style="background-color:lightgray;" align="center"  >
    <td>Person ID</td>
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
    <td>Delete</td>
    <td>Edit</td>
    <td>Display</td>


  </tr>

<?php



$records = mysqli_query($conn,"select * from Person"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
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
    <td style="background-color:lightyellow;"><a href="edit.php?id=<?php echo $data['personID']; ?>">Edit</a></td>
    <td><button><a href="delete.php? deleteId=<?php echo $data['personID']; ?>">Delete</a></button></td>
    <td style="background-color:lightgreen;"><a href="display.php?id=<?php echo $data['personID']; ?>">Display</a></td>
  </tr>	
<?php
}
?>
</table>

<a href="../index.php">Back to main page</a>

</body>
</html>