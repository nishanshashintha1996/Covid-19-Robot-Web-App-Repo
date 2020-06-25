<?php

require "robot_connect.php";

$room_number = $_POST['room_number'];
$robot_id=1010;


        
$sql_update_ref_key = "UPDATE robot_control_status SET  m_room_id=? WHERE robot_id=? ";
$stmt_update_ref_key= $robot_conn->prepare($sql_update_ref_key);
$stmt_update_ref_key->bind_param('ss', $room_number, $robot_id);

if ($stmt_update_ref_key->execute() === TRUE) {
    echo "Image Deactive";
}
else{
    echo "Not Updateed";
}


?>