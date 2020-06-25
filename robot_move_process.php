<?php

require "robot_connect.php";

$robot_move = $_POST['robot_move'];
$robot_id=1010;




//echo "process ".$robot_move;

if($robot_move=="right"){
    
     $left = 0;
     $right = 1;
     $front = 0;
     $back = 0;
     $stop = 0;
    
    $sql_update_ref_key = "UPDATE robot_control_status SET m_left=?, m_right=?, m_front=?, m_back=?, m_stop=?   WHERE robot_id=? ";
    
}
else if($robot_move=="left"){
    
     $left = 1;
     $right = 0;
     $front = 0;
     $back = 0;
     $stop = 0;
    
    $sql_update_ref_key = "UPDATE robot_control_status SET m_left=?, m_right=?, m_front=?, m_back=?, m_stop=?   WHERE robot_id=? ";
    
}
else if($robot_move=="front"){
    
     $left = 0;
     $right = 0;
     $front = 1;
     $back = 0;
     $stop = 0;
    
    $sql_update_ref_key = "UPDATE robot_control_status SET m_left=?, m_right=?, m_front=?, m_back=?, m_stop=?   WHERE robot_id=? ";
    
}
else if($robot_move=="back"){
    
     $left = 0;
     $right = 0;
     $front = 0;
     $back = 1;
     $stop = 0;
    
    $sql_update_ref_key = "UPDATE robot_control_status SET  m_left=?, m_right=?, m_front=?, m_back=?, m_stop=?   WHERE robot_id=? ";
    
}
else if($robot_move=="stop"){
    
     $left = 0;
     $right = 0;
     $front = 0;
     $back = 0;
     $stop = 1;
    
    $sql_update_ref_key = "UPDATE robot_control_status SET  m_left=?, m_right=?, m_front=?, m_back=?, m_stop=?   WHERE robot_id=? ";
    
}



        
        
        $stmt_update_ref_key= $robot_conn->prepare($sql_update_ref_key);
        $stmt_update_ref_key->bind_param('ssssss', $left, $right, $front, $back, $stop, $robot_id);
        
        if ($stmt_update_ref_key->execute() === TRUE) {
            echo "Image Deactive";
        }
        else{
            echo "Not Updateed";
        }


?>