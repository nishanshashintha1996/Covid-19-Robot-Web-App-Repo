<?php
    require 'connection.php';
    require 'date-time.php';
    session_start();
    $email = mysqli_real_escape_string($conn_robot, $_POST['email']);
    $password = mysqli_real_escape_string($conn_robot, $_POST['password']);
    $check = mysqli_real_escape_string($conn_robot, $_POST['check']);
    $recaptcha = mysqli_real_escape_string($conn_robot, $_POST['g-recaptcha-response']);
    
    if (empty($email)) {
        header("location:login.php?dsagbdveyvd4ad1ev5asdsadaeSd=Dsdbsbdndas");
    }else{
        if (empty($password)) {
            header("location:login.php?ddadgydw785dwDDfedfvceefc=Dsdbsbdndas");
        }else{
            if (empty($recaptcha)) {
                header("location:login.php?GGdbcvysdb77s1dVcshccds=Dsdbsbdndas");
            }else{
                $status;
                $sql_fetch_search = "SELECT * FROM system_user_data WHERE email='$email'";
                $result_fetch_search = $conn_robot->query($sql_fetch_search);
                if ($result_fetch_search->num_rows > 0) {
                    while($row_fetch_search = $result_fetch_search->fetch_assoc()) {
                        $pass = $row_fetch_search['password'];
                        $id = $row_fetch_search['id'];
                        $status = $row_fetch_search['em_con'];
                    }
                    if($status==1){
                        $bool = password_verify ($password ,$pass);
                        if($bool){
                            $_SESSION['LAST_ACTIVITY']=time();
                            $_SESSION['Gsrd5d189D8d5a75e']=md5($id, TRUE);
                            //--------------------------------------------------------------------------------
                            $sql_log_time_update = "UPDATE system_user_data SET last_login='$timestamp' WHERE id=$id";
                            if ($conn_robot->query($sql_log_time_update) === TRUE) {
                                header("location:https://robot.findx.lk/");
                            } else {
                                header("location:login.php?Dgd741vedfc81a1sacscDDswd51dwc=errorxsRed1sdwcF2sd12ec");
                            }
                            //---------------------------------------------------------------------------------
                            
                        }else{
                            header("location:login.php?Dgd741vedfc81a1sacscDDswd51dwc=invalRed1sdwcF2sd12ec");
                        }
                    }else{
                        header("location:login.php?Dgd741vedfc81a1sacscDDswd51dwc=notconRed1sdwcF2sd12ec");
                    }
                } else {
                    header("location:login.php?Dgd741vedfc81a1sacscDDswd51dwc=notavaiRed1sdwcF2sd12ec");
                }
            }
        }
    }
?>