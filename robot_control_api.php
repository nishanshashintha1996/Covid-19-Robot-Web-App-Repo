<?php

require "robot_connect.php";
$robot_id = 1010;



$sql_get_control_status = $robot_conn->prepare('SELECT * FROM robot_control_status WHERE robot_id=? ');
$sql_get_control_status->bind_param('s', $robot_id); // 's' specifies the variable type => 'string'
$sql_get_control_status->execute();
$result_get_control_status = $sql_get_control_status->get_result();
if ($result_get_control_status ->num_rows > 0) {
    
   $row_get_control_status = $result_get_control_status->fetch_assoc();

    $mode = $row_get_control_status['ro_mode'];
    $room_number = $row_get_control_status['m_room_id'];
    $m_left = $row_get_control_status['m_left'];
    $m_right = $row_get_control_status['m_right'];
    $m_front = $row_get_control_status['m_front'];
    $m_back = $row_get_control_status['m_back'];
    $m_stop = $row_get_control_status['m_stop'];

    /*
    array_push($control_status,"mode",$mode);
    array_push($control_status,"room_number",$room_number);
    array_push($control_status,"m_left",$m_left);
    array_push($control_status,"m_right",$m_right);
    array_push($control_status,"m_front",$m_front);
    array_push($control_status,"m_back",$m_back);
    array_push($control_status,"m_stop",$m_stop);

    */
    
    $age = array(
        
        
        
        "mode"=>$mode, 
        "room_number"=>$room_number, 
        "m_left"=>$m_left,
        "m_right"=>$m_right,
        "m_front"=>$m_front,
        "m_back"=>$m_back,
        "m_stop"=>$m_stop
        
        
        
        
        );
    
    
    
    echo json_encode($age);
    
}





die();
require "robot_connect.php";
$robot_id = 1010;

$control_status = array();

$sql_get_control_status = $robot_conn->prepare('SELECT * FROM robot_control_status WHERE robot_id=? ');
$sql_get_control_status->bind_param('s', $robot_id); // 's' specifies the variable type => 'string'
$sql_get_control_status->execute();
$result_get_control_status = $sql_get_control_status->get_result();
if ($result_get_control_status ->num_rows > 0) {
    
   $row_get_control_status = $result_get_control_status->fetch_assoc();

    $mode = $row_get_control_status['ro_mode'];
    $room_number = $row_get_control_status['m_room_id'];
    $m_left = $row_get_control_status['m_left'];
    $m_right = $row_get_control_status['m_right'];
    $m_front = $row_get_control_status['m_front'];
    $m_back = $row_get_control_status['m_back'];
    $m_stop = $row_get_control_status['m_stop'];

    /*
    array_push($control_status,"mode",$mode);
    array_push($control_status,"room_number",$room_number);
    array_push($control_status,"m_left",$m_left);
    array_push($control_status,"m_right",$m_right);
    array_push($control_status,"m_front",$m_front);
    array_push($control_status,"m_back",$m_back);
    array_push($control_status,"m_stop",$m_stop);

    */
    
}



echo json_encode($control_status);

?>