<?php
$servername = "localhost";
$username = "nart23000";
$password ="QYPFY1uV";
$dbname ="wp_nart23000";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>