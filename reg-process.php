<?php
    require 'connection.php';
    require 'date-time.php';
    $fname = mysqli_real_escape_string($conn_robot, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn_robot, $_POST['lname']);
    $email = mysqli_real_escape_string($conn_robot, $_POST['email']);
    $acc_type = mysqli_real_escape_string($conn_robot, $_POST['acc_type']);
    $password = mysqli_real_escape_string($conn_robot, $_POST['password']);
    $cPassword = mysqli_real_escape_string($conn_robot, $_POST['cPassword']);
    if (empty($fname)) {
        header("location:register.php?f=emp");
    }
    if (empty($lname)) {
        header("location:register.php?l=emp");
    }
    if (empty($email)) {
        header("location:register.php?em=emp");
    }
    if (empty($password)) {
        header("location:register.php?p=emp");
    }
    if (empty($cPassword)) {
        header("location:register.php?cP=emp");
    }
    if(strcmp($password,$cPassword)!=0){
        header("location:register.php?pC=cP");
    }else{
        $hs_pass = password_hash($password, PASSWORD_DEFAULT, ['cost'=> 12]);
    }
    $sql_fetch_search = "SELECT * FROM system_user_data WHERE email='$email'";
    $result_fetch_search = $conn_robot->query($sql_fetch_search);
    if ($result_fetch_search->num_rows > 0) {
        header("location:register.php?sta=avai");
    } else {
        $sql_insert_data = "INSERT INTO system_user_data (fname,lname,email,password,em_con,last_login,user_type)
        VALUES ('$fname','$lname','$email','$hs_pass','0','$timestamp','$acc_type')";
        if ($conn_robot->query($sql_insert_data) === TRUE) {
            $id_reg_user_id;
            $sql_fetch_reg_data = "SELECT id FROM system_user_data WHERE email='$email'";
            $result_fetch_reg_data = $conn_robot->query($sql_fetch_reg_data);
            if ($result_fetch_reg_data->num_rows > 0) {
                while($row_fetch_reg_data = $result_fetch_reg_data->fetch_assoc()) {
                    $id_reg_user_id = $row_fetch_reg_data['id'];
                    header("location:confirmation-mail.php?us_id=$id_reg_user_id&ybdsKtg2453KfvgtsvdFb7df6a=ytebsdaDE4");
                }
            } else {
                header("location:register.php?sta=errorxs");
            }
        } else {
            header("location:register.php?sta=errorxs");
        }
    } 
?>