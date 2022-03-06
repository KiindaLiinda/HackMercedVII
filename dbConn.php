<?php
$db = mysqli_connect("localhost","phpmyadmin","password","user_information");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>