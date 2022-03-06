<?php
include "dbConn.php"; // Using database connection file here
if(isset($_POST['submit']))
{
    $fname = $_POST['pfname'];
    $desc = $_POST['pdesc'];
    $location =  $_POST['plocation'];
    $religion = $_POST['preligion'];
    $maxPeople = $_POST['pmaxPeople'];
    $phoneNum =  $_POST['pphoneNum'];
    $email =  $_POST['pemail'];
    $language =  $_POST['planguage'];
    $insert = mysqli_query($db,"INSERT INTO `hosts`(`location`, `name`, `description`, `religion`, `max_people`, `phone`, `email`, `languages` ) VALUES ('$location', '$fname','$desc','$religion','$maxPeople','$phoneNum','$email','$language')");
    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        $result = mysqli_query($db, "SELECT * FROM hosts");
        echo "You have succesfully submitted your profile. Your ID  is " . (mysqli_num_rows($result) + 999) . ". You will use this to get the information about your matched refugee, so please do not lose it.";
    }
}
mysqli_close($db); // Close connection
?>