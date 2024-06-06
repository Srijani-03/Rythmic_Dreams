<?php 
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "rythmic";

$conn = new mysqli($servername, $username, $password, $database);

?>