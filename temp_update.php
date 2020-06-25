<?php

require "robot_connect.php";


$robot_id=1010;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temp = test_input($_POST["temp"]);
    
    
    $sql_update_ref_key = "UPDATE body_temp_status SET  b_t_value=? WHERE robot_id=? ";
    $stmt_update_ref_key= $robot_conn->prepare($sql_update_ref_key);
    $stmt_update_ref_key->bind_param('ss', $temp, $robot_id);
    
    if ($stmt_update_ref_key->execute() === TRUE) {
        echo "Updated";
    }
    else{
        echo "Not Updateed";
    }

    
    
    
    
}







function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>