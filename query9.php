
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
  <title>Query 9</title>
</head>
<body>

<h2>Query 9</h2>

<h3> Receive shipment.</h3>
<h3>
CREATE TRIGGER addCount BEFORE INSERT on shipment for each row begin 

DECLARE rowcount INT;
   
   SELECT COUNT(*) 
   INTO rowcount
   FROM facility;
   
   IF rowcount > 0 THEN
       UPDATE facility
       SET inventory = inventory + new.quantity WHERE facility.id = new.facilityID;
   ELSE
       INSERT INTO facility(inventory)
       VALUES(new.quantity);
   END IF; 
   END; </h3>

   <h3> inser into shipment values (3,4,2020-11-09,2,100);<h3>

<table border="2">


</body>
</html>


















