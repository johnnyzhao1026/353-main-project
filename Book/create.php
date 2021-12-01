<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Booking Information</title>
</head>
<body>


<div>
    <h1>Booking system</h1>
    <form action="./postNewBookInfo.php" method="post">

        <label> <b>PersonID</b> </label><br>
        <input type=text placeholder="please enter your personID" name='personID' required> </input><br>

        <label> <b>Vaccination FacilityID</b> </label><br>
        <select name="facilityID">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10 </option>
            <!-- <option>Pharmaprix</option>
            <option>Concordia</option>
            <option>Warden</option>
            <option>Chartwell</option>
            <option>Samosa</option>
            <option>Markham</option>
            <option>Glen</option>
            <option>Walmart</option>
            <option>Provigo</option>
            <option>Merbont </option> -->
        </select><br>

        <label> <b>Vaccination Type</b> </label><br>
        <select name="vaccinationTypes">
            <option>AstraZeneca</option>
            <option>BioNTech</option>
            <option>Gameleya</option>
            <option>Johnson</option>
            <option>Moderna</option>
            <option>Novavax</option>
            <option>Pfizer</option>
            <option>Sinopharm</option>
            <option>Sinovac</option>
            <option>Sputnik V</option>
        </select><br>



        <label> <b>Date</b> </label><br>
        <input type="date" name='appointmentDate' required> </input><br>


        <label> <b>Time From</b> </label><br>
        <select name="time">
            <option>8:00</option>
            <option>8:20</option>
            <option>8:40</option>
            <option>9:00</option>
            <option>9:20</option>
            <option>9:40</option>
            <option>10:00</option>
            <option>10:20</option>
        </select><br>

        <label> <b>Time To</b> </label><br>
        <select name="timeTo">
            <option>8:20</option>
            <option>8:40</option>
            <option>9:00</option>
            <option>9:20</option>
            <option>9:40</option>
            <option>10:00</option>
            <option>10:20</option>
            <option>10:40</option>
        </select><br>

        <button type="submit">Add</button>
    </form>
    <a href="./book.php">Back to Appointment Information page</a>
</div>

</body>
</html>