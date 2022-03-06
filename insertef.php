<?php
include "dbConn.php"; // Using database connection file here
if(isset($_POST['submit']))
{
    $name = $_POST['newrefugeeName'];
    $location = $_POST['newrefugeeLocation'];
    $children =  $_POST['newrefugeeChildren'];
    $disability = $_POST['newrefugeeDisability'];
    $dietary = $_POST['newrefugeeDietary_Res'];
    $religion =  $_POST['newrefugeeReligion'];
    $phone =  $_POST['newrefugeephoneNum'];
    $email =  $_POST['newrefugeeEmail'];
    $language =  $_POST['newrefugeeLanguage'];
    $insert = mysqli_query($db,"INSERT INTO `refugees`(`location`, `name(s)`, `children`, `disabilities`, `dietary_res`, `religion`, `phone`, `email`, `languages` ) 
    VALUES ('$location', '$name','$children','$disability','$dietary','$religion','$phone', '$email', '$language')");
        if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        $result = mysqli_query($db, "SELECT * FROM hosts");
        echo "You have succesfully submitted your profile. Your ID  is " . (mysqli_num_rows($result) + 1000) . ". You will use this to get the information about your matched host, so please do not lose it.";
}
}
mysqli_close($db); // Close connection
?>