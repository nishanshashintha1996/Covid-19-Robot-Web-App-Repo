<?php
$servername = "localhost";
$username = "mahiwcik_nishanaccess";
$password = "mC%#dZu%Q-if";
$db = "mahiwcik_corona_robot";

// Create connection
$conn_robot = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn_robot->connect_error) {
    die("Connection failed: " . $conn_robot->connect_error);
}
//echo "Connected successfully";
?>	

	