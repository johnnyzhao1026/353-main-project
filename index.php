<?php

// include connection file
//include_once 'connectdb.php';

// $sql_query = "select * From person" ;
// $result = mysqli_query($conn,$sql_query);


//     while ($row = mysqli_fetch_assoc($result)){
//        echo $row['dateOfBirth']."<br>";
//      }
?>

<!DOCTYPE html>
<html>
<head>
    <title>mnc353_2</title>
    <h1>mnc353_2 team<h1>
</head>

<body>

<div class="col-12 col-md-8">
 <h1 id="titreNo1" class="d-block themeTitre">COVID-19 vaccination campaign</h1>
 </div>

 
<!DOCTYPE HTML>
<html>

<div class="main">
<h2> Main project</h2>
<hr>
<h2> The function and sql query </h2>
<dl style='font-size: 20px'>

<dt> 1.Person </dt>
<a href="./person/per.php" class="btn-danger"> Function: Create/Delete/Edit/Display</a>
<br>
  <br>


<dt>2.Public Health Worker</dt>
<a href="./employee/employee.php" class="btn-danger"> Function: Create/Delete/Edit/Display</a>
<br>
  <br>

<dt>3.Public Health Facility</dt>
<a  href="./facility/facility.php" class="btn-danger" > Function: Create/Delete/Edit/Display</a>
<br>
  <br>

 
<dt> <b ><a> 4.Vaccination Type</a></b> </dt>
<a  href="./vaccination/vaccination.php" class="btn-danger" >Display</a>
<br>
  <br>


<dt> <b ><a> 5.COVID-19 infection Variant Type</a></b> </dt>
<a  href="./infection/infection.php">Display</a>
<br>
  <br>


<dt> <b ><a> 6.Age Group</a></b> </dt>
<a  href="./age/age.php" class="btn-danger">Display</a>
<br>
  <br>


<dt> <b ><a> 7.Province</a></b> </dt>
<a  href="./province/province.php" class="btn-danger"> Function: Create/Delete/Edit/Display</a>
<br>
  <br>



 <dt> <b > 8.Set a new Group Age for a Province:</b> </dt>
<a href="./province/province.php" class="btn-danger">Set</a>
<br>
 <br>


  <dt> <b > 9.Apppintment for vaccination </b> </dt>
  <a  href="./query9.php" class="btn-danger">Function: Create/Delete/Edit/Display</a>

<br>
 <br>

 <dt> <b > 10.Assignment for a public health worker </b> </dt>
 <a href="./query10.php" class="btn-danger">Function: Create/Delete/Edit/Display</a>
<br>
 <br>


    <dt> <b > 11.Display the bookings and the availability of spots for vaccination for a given facility from a given period of time to a given period of time.</b> </dt>
    <a href="./query11.php" class="btn-danger">Perform</a>
<br>
 <br>
  
<dt> <b > 12.Display the first available spot for vaccination in a given facility starting from a given date</b> </dt>
    <a href="./query12.php" class="btn-danger">List</a>
<br>
<br>
  

  <dt> <b > 13.For a given facility and on a given date, display the Nurses that work for the facility but are not assigned to the facility on the specified date</b> </dt>
    <a href="./query13.php" class="btn-danger">List</a>
<br>
 <br>
  
  <dt> <b > 14.For a given date, display all the facilities that do not have any nurse scheduled to work at the facility.</b> </dt>
    <a href="./query14.php" class="btn-danger">List</a>
<br>
 <br>

 <dt> <b > 15.For a given facility and on a given date, display the schedule for the facility.</b> </dt>
    <a href="./query15.php" class="btn-danger">Give</a>
<br>
 <br>


<dt> <b > 16.Perform a vaccine to a person with an appointment.</b> </dt>
    <a href="./query16.php" class="btn-danger">Give</a>
<br>
 <br>



<dt> <b > 17.Perform a vaccine to a person with an appointment.</b> </dt>
    <a href="./query17.php" class="btn-danger">Give</a>
<br>
 <br>


<dt> <b > 18.Provide a report that display for each nurse in the system.</b> </dt>
    <a href="./query18.php" class="btn-danger">Give</a>
<br>
 <br>

<dt> <b > 19.Give a detailed report of all the facilities in the city of Montréal.</b> </dt>
    <a href="./query19.php" class="btn-danger">Give</a>
<br>
 
<br>
<div> <dt> <b > 20.For a given person, display the bookings if applicable,the history of vaccinations if applicable, and the history of infections if applicable.</b> </dt>

<form action="./query20.php" method = "post">
            
        <input type="text" placeholder="please enter personID" name = "personID" required>
        
             <button type="submit">Search</button>
       </form>

  
  </div>

<br>
 <br> 
  
</dl>
</div>
</body>
</html>



</body>

<footer><h3>The End</h3></footer>

</html>
