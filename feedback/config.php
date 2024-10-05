<?php
ob_start(); //Turns on output buffering 

$con = mysqli_connect("sql7.freesqldatabase.com", "sql7735507", "ycxKUijf7U", "sql7735507"); //Connection variable

if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
?>
