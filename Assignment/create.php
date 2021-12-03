<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Assignment for a worker</title>
</head>
<body>
    <h1>Create Assignment for a worker</h1>
    <form action="./postNewAssignmentInfo.php" method="POST">

        <label> <b>Person ID</b> </label><br>
        <input type=text placeholder="please enter your personID" name='personID' required> </input><br>

        <label> <b>Vaccination Facility Name</b> </label><br>
        <input type="text" placeholder="please enter where did you work" name="facilityName" required> </input><br>
            

        <label> <b>Job title</b> </label><br>
        <input type="text" placeholder="please enter your position in facility" name="jobTitle" required> </input><br>
           

        <label> <b>Start Working Date</b> </label><br>
        <input type="date" name='startDate' required> </input><br>

        <label> <b>End Working Date</b> </label><br>
        <input type="date" name='endtDate' required> </input><br><br><br>

        <label> <b>Facility ID</b> </label><br>
        <input type="text" placeholder="please enter your facility id" name='facilityID' required> </input><br><br><br>

        <!-- <p>If you are a nurse, please enter the following blanks to see your working time in facility</p>
        <br><h2>Nurse Working Time</h2><br>

        <label> <b>Person ID</b> </label><br>
        <input type=text placeholder="please enter your personID" name='personID'> </input><br>

        <label> <b>Vaccination Facility Name</b> </label><br>
        <input type="text" placeholder="please enter where did you work" name="facilityName1"> </input><br>
            

        <label> <b>Job title</b> </label><br>
        <input type="text" placeholder="please enter your position in facility" name="facilityJob1"> </input><br>
           

        <label> <b>Start Working Time</b> </label><br>
        <input type="date" name='startTime'> </input><br>

        <label> <b>End Working Time</b> </label><br>
        <input type="date" name='endTime'> </input><br><br><br> -->

        <button type="submit">Add</button>
    </form>
    <a href="./assignment.php">Back to Appointment Information page</a>
</body>
</html>