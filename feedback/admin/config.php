<?php
ob_start();
$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("sql7.freesqldatabase.com", "sql7735507", "ycxKUijf7U", "sql7735507");

if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
?>
