
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
  <title>Query 10</title>
</head>
<body>

<h2>Query 10</h2>

<h3> Receive shipment.</h3>
<h3>






CREATE TRIGGER trans BEFORE INSERT on transfer for each row begin 

DECLARE rowcount INT;
   
   SELECT COUNT(*) 
   INTO rowcount
   FROM facility;
   
   IF rowcount > 0 THEN
       UPDATE facility
       SET inventory = inventory + new.count WHERE facility.id = new.inF;
       UPDATE facility
       SET inventory = inventory - new.count WHERE facility.id = new.outF;

   ELSE
       INSERT INTO facility(inventory)
       VALUES(new.count);
   END IF; 
   END; 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </h3>

   <h3> inser into transfer values (2,1,2,2020-11-09,2,60);<h3>

<table border="2">


</body>
</html>


















