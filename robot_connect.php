<?php

$domain_name="https://robot.findx.lk";


//Staff DB
$host_find_x='localhost';
$user_find_x='mahiwcik_corona_robot';
$pass_find_x='7;RNiuJZG?T9';
$db_find_x='mahiwcik_corona_robot';




// Create connection
$robot_conn = new mysqli($host_find_x,$user_find_x,$pass_find_x,$db_find_x);
// Check connection
if ($robot_conn->connect_error) {
    header("location:$domain_name/error.php?msg=Connection Error");
} 


date_default_timezone_set('Asia/Colombo');

$lk_date_time= date('Y-m-d H:i:s', time());
$lk_date = date('Y-m-d', time());
$lk_time = date('H:i:s', time());


?>