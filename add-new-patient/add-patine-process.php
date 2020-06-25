<?php
    require '../connection.php';
    require '../date-time.php';
    require '../session-manager.php';
    
    $fullname = mysqli_real_escape_string($conn_robot, $_POST['fullname']);
    $age = mysqli_real_escape_string($conn_robot, $_POST['age']);
    $nic = mysqli_real_escape_string($conn_robot, $_POST['nic']);
    $address = mysqli_real_escape_string($conn_robot, $_POST['address']);
    $comment = mysqli_real_escape_string($conn_robot, $_POST['comment']);
    $cStatus = mysqli_real_escape_string($conn_robot, $_POST['cStatus']);
    if (empty($fullname)) {
        header("location:https://robot.findx.lk/add-new-patient/?Dnsdbdasne=sd1csec8Dc1df2");
    }else{
        if (empty($age)) {
            header("location:https://robot.findx.lk/add-new-patient/?Dnsdbdasne=sdDyebed8411df2");
        }else{
            if (empty($nic)) {
                header("location:https://robot.findx.lk/add-new-patient/?Dnsdbdasne=sdDyebRRw55df2");
            }else{
               if (empty($address)) {
                    header("location:https://robot.findx.lk/add-new-patient/?Dnsdbdasne=75DD22desf7");
                }else{
                    if (empty($comment)) {
                        header("location:https://robot.findx.lk/add-new-patient/?Dnsdbdasne=8552Dwfvd44f");
                    }else{
                        $sql_update_order_two = "UPDATE patient_data SET recent_order=0 WHERE recent_order=2";
                        if ($conn_robot->query($sql_update_order_two) === TRUE) {
                          //echo "Record updated successfully";
                        }
                        
                        
                        $sql_update_order_one = "UPDATE patient_data SET recent_order=2 WHERE recent_order=1";
                        if ($conn_robot->query($sql_update_order_one) === TRUE) {
                          //echo "Record updated successfully";
                        }
                            
                        $ava_status = 1;
                        $sql_search_data_validity = "SELECT * FROM patient_data WHERE nic='$nic'";
                        $result_search_data_validity = $conn_robot->query($sql_search_data_validity);
                        if ($result_search_data_validity->num_rows > 0) {
                            while($row_search_data_validity = $result_search_data_validity->fetch_assoc()) {
                                $ava_status++;
                            }
                        }
                        if($ava_status==1){
                            $sql_insert_Patient_data = "INSERT INTO patient_data (d_id, name, age, nic, address, comment, status, date_time, recent_order)
                            VALUES ('$id', '$fullname', '$age', '$nic', '$address', '$comment', '$cStatus', '$datetime', '1')";
                            if ($conn_robot->query($sql_insert_Patient_data) === TRUE) {
                              header("location:https://robot.findx.lk/add-new-patient/?sdghjecbssdajwBGhds22sdsbe=Bvbwvsbsdgbdn2dsd");
                            } else {
                              header("location:https://robot.findx.lk/add-new-patient/?sdghjecbssdajwBGhds22sdsbe=sbnBFs21ssbcbshcbs");
                            }
                        }else{
                            header("location:https://robot.findx.lk/add-new-patient/?sdghjecbssdajwBGhds22sdsbe=56shcBVgswdansdgeb");
                        }
                    }
                } 
            }
        }
    }
    
?>