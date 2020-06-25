<?php

require "robot_connect.php";

$robot_mode = $_POST['robot_mode'];
$robot_id=1010;

$m_room_id = "";
        
$sql_update_ref_key = "UPDATE robot_control_status SET  ro_mode=?, m_room_id=? WHERE robot_id=? ";
$stmt_update_ref_key= $robot_conn->prepare($sql_update_ref_key);
$stmt_update_ref_key->bind_param('sss', $robot_mode, $m_room_id, $robot_id);

if ($stmt_update_ref_key->execute() === TRUE) {
    echo "Image Deactive";
}
else{
    echo "Not Updateed";
}


?>