<?php
session_start();

$servername ="localhost";
$username ="root";
$password = "";
$dbname ="sbb";

$con = new mysqli($servername, $username, $password, $dbname);

if($con->connect_error)
{
    die("konekcija nije uspela " .$con->connect_error);
}
?>