<?php

require "robot_connect.php";

$food_try = $_POST['foodTray'];
$robot_id=1010;

$m_room_id = "";
        
$sql_update_ref_key = "UPDATE robot_control_status SET  food_tray_open=? WHERE robot_id=? ";
$stmt_update_ref_key= $robot_conn->prepare($sql_update_ref_key);
$stmt_update_ref_key->bind_param('ss', $food_try, $robot_id);

if ($stmt_update_ref_key->execute() === TRUE) {
    echo "food try open";
}
else{
    echo "food try not open";
}


?>