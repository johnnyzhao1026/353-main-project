
<?php

$db = mysqli_connect("localhost:3316","root","","main");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html> 
<html>
<head>
  <title>Query 14</title>
</head>
<body>

<h2>Query 14</h2>

<h3>  Get details of all the people who got vaccinated and have been infected with at
least two different variants of Covid-19</h3>

<table border="2">
  <tr>
    
  <td>first name</td>
    <td>last name</td>
    <td>birthday</td>
    <td>email</td>
    <td>phone</td>
    <td>date vaccinate</td>
    <td>vaccination type</td>
    <td>infect yes or no</td>
    
  </tr>

<?php

//include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select person.first_name, person.last_name,person.birth, person.email, person.phone,
given.date_vaccination, vaccination.type, infect.yorn from main.person, main.given, main.vaccination,main.infect 
where person.id = given.id && given.id = infect.id && given.g_id = vaccination.id && given.dose_num >0"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['first_name']; ?></td>
    <td><?php echo $data['last_name']; ?></td>
    <td><?php echo $data['birth']; ?></td>    
    <td><?php echo $data['email']; ?></td>  
    <td><?php echo $data['phone']; ?></td>  
    <td><?php echo $data['date_vaccination']; ?></td>  
    <td><?php echo $data['type']; ?></td>  
    <td><?php echo $data['yorn']; ?></td>  
    
    
  </tr>	
<?php
}
?>
</table>

</body>
</html>





























