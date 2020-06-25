<?php
  
    require '../connection.php';
    require '../date-time.php';
    require '../session-manager.php';
    
    $stmt = $conn_robot->prepare("SELECT id FROM api_notification_table;");
    $stmt->execute();
    $stmt->bind_result($id);
    $data = array();
    while($stmt->fetch()){
        $temp = array();
        $temp['id'] = $id;
        
        array_push($data,$temp);
    }
    
    echo json_encode($data);
    
?>
