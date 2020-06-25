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
    $id_petient = mysqli_real_escape_string($conn_robot, $_POST['id']);
    $file = mysqli_real_escape_string($conn_robot, $_POST['fileToUpload']);
    $file_title = mysqli_real_escape_string($conn_robot, $_POST['file_title']);
    $file_description = mysqli_real_escape_string($conn_robot, $_POST['file_description']);
    
    $ran = rand();
    
    $sql_update_order_two = "UPDATE patient_data SET recent_order=0 WHERE recent_order=2";
    if ($conn_robot->query($sql_update_order_two) === TRUE) {
      //echo "Record updated successfully";
    }
                        
                        
    $sql_update_order_one = "UPDATE patient_data SET recent_order=2 WHERE recent_order=1";
    if ($conn_robot->query($sql_update_order_one) === TRUE) {
      //echo "Record updated successfully";
    }
    $responce = array(0,0,0,0,0,0,0);
    $sql_filter_data = "SELECT * FROM patient_data WHERE id='$id_petient'";
    $result_filter_data = $conn_robot->query($sql_filter_data);
    if ($result_filter_data->num_rows > 0) {
      while($row_filter_data = $result_filter_data->fetch_assoc()) {
         $tem_name = $row_filter_data['name'];
         $tem_age = $row_filter_data['age'];
         $tem_nic = $row_filter_data['nic'];
         $tem_address = $row_filter_data['address'];
         $tem_comment = $row_filter_data['comment'];
         $Cstatus = $row_filter_data['status'];
         
         if(($Cstatus!=$cStatus)&&($cStatus!="")){
            $sql_update = "UPDATE patient_data SET status='$cStatus' WHERE id='$id_petient'";
            if ($conn_robot->query($sql_update) === TRUE) {
                $sql_update_order_one = "UPDATE patient_data SET recent_order=1 WHERE id='$id_petient'";
                if ($conn_robot->query($sql_update_order_one) === TRUE) {
                  //echo "Record updated successfully";
                }
                $responce[6]=1;
            }
         }
         
         if(($tem_name!=$fullname)&&($fullname!="")){
            $sql_update = "UPDATE patient_data SET name='$fullname' WHERE id='$id_petient'";
            if ($conn_robot->query($sql_update) === TRUE) {
                $sql_update_order_one = "UPDATE patient_data SET recent_order=1 WHERE id='$id_petient'";
                if ($conn_robot->query($sql_update_order_one) === TRUE) {
                  //echo "Record updated successfully";
                }
                $responce[0]=1;
            }
         } 
         
         if(($tem_age!=$age)&&($age!="")){
            $sql_update = "UPDATE patient_data SET age='$age' WHERE id='$id_petient'";
            if ($conn_robot->query($sql_update) === TRUE) {
                $sql_update_order_one = "UPDATE patient_data SET recent_order=1 WHERE id='$id_petient'";
                if ($conn_robot->query($sql_update_order_one) === TRUE) {
                  //echo "Record updated successfully";
                }
                $responce[1]=1;
              }
         }
         
         if(($tem_nic!=$nic)&&($nic!="")){
            $sql_update = "UPDATE patient_data SET nic='$nic' WHERE id='$id_petient'";
            if ($conn_robot->query($sql_update) === TRUE) {
                $sql_update_order_one = "UPDATE patient_data SET recent_order=1 WHERE id='$id_petient'";
                if ($conn_robot->query($sql_update_order_one) === TRUE) {
                  //echo "Record updated successfully";
                }
                $responce[2]=1;
              }
         }
         
         if(($tem_address!=$address)&&($address!="")){
            $sql_update = "UPDATE patient_data SET address='$address' WHERE id='$id_petient'";
            if ($conn_robot->query($sql_update) === TRUE) {
                $sql_update_order_one = "UPDATE patient_data SET recent_order=1 WHERE id='$id_petient'";
                if ($conn_robot->query($sql_update_order_one) === TRUE) {
                  //echo "Record updated successfully";
                }
                $responce[3]=1;
            }
         }
         
         if(($tem_comment!=$comment)&&($comment!="")){
            $sql_update = "UPDATE patient_data SET comment='$comment' WHERE id='$id_petient'";
            if ($conn_robot->query($sql_update) === TRUE) {
                $sql_update_order_one = "UPDATE patient_data SET recent_order=1 WHERE id='$id_petient'";
                if ($conn_robot->query($sql_update_order_one) === TRUE) {
                  //echo "Record updated successfully";
                }
                $responce[4]=1;
            }
         }
         
         if(isset($file)){
            $target_dir = "fileDirectory/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            if (file_exists($target_file)) {
                $uploadOk = 0;
            }
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                $uploadOk = 0;
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                $fileType = "document";
            }else{
                $fileType = "image";
            }
            if ($uploadOk != 0) {
                $status_got = 1;
                $add_img_name = $_FILES["fileToUpload"]["name"];
                if($status_got = 1){
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                       
                        $sql_upload_file = "INSERT INTO patient_reports (d_id, p_id, file_name, location, file_type, title, description, file_status, date_time)
                        VALUES ('$id', '$id_petient', '$add_img_name', 'https://robot.findx.lk/edit-patient-data/fileDirectory/', '$imageFileType', '$file_title', '$file_description', 'new', '$datetime')";
                        
                        if ($conn_robot->query($sql_upload_file) === TRUE) {
                            $sql_update_order_one = "UPDATE patient_data SET recent_order=1 WHERE id='$id_petient'";
                            if ($conn_robot->query($sql_update_order_one) === TRUE) {
                              //echo "Record updated successfully";
                            }
                            $responce[5]=1;
                        }else{
                          $responce[5]=0;
                        }
                    } else {
                        $responce[5]=0;
                    }
                }
            }
         }else{
             $responce[5]=0;
         }
      }
    }
    $responce = implode($responce);
    header("location:https://robot.findx.lk/edit-patient-data/?gGFdjehbBuwbxbsdbwdjcb=".($id_petient+$ran)."&sGehcbchcbshdsd=".$ran."&sdghjecbssdajwBGhds22sdsbe=$responce");
?>