<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "car_rent_project";

$mysqli = new mysqli($servername,$username,$password,$database);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>