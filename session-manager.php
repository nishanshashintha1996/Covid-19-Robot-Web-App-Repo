<?php
    require 'connection.php';
    require 'date-time.php';
    session_start();
    
    if(isset($_GET['gdhabdhgdhebvc555dasd'])){
        if($_GET['gdhabdhgdhebvc555dasd']=="sadvajsdbasdv"){
            session_unset();
            session_destroy();
            header("location:https://robot.findx.lk/");
        }
    }
    
    $id = $_SESSION['Gsrd5d189D8d5a75e'];
    if (empty($id)) {
        header("location:https://robot.findx.lk/login.php?vdgjfuassnm68fba=davbhcgad5c78cas64c87asc");
    }else{
        $id_tem;
        $sql_fetch_id = "SELECT * FROM system_user_data";
        $result_fetch_id = $conn_robot->query($sql_fetch_id);
        if ($result_fetch_id->num_rows > 0) {
          while($row_fetch_id = $result_fetch_id->fetch_assoc()) {
            if(md5($row_fetch_id['id'], TRUE) == $id){
              $id = $row_fetch_id['id'];
              $fname = $row_fetch_id['fname'];
              $lname =  $row_fetch_id['lname'];
              $email = $row_fetch_id['email'];
              $last_log = $row_fetch_id['last_login'];
              $user_type = $row_fetch_id['user_type'];
            }
          }
        }
        if(($timestamp - $last_log)>20000){
            session_unset();
            session_destroy();
        }
    }
?>