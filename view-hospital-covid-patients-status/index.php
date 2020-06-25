<!DOCTYPE html>
<?php
    require '../connection.php';
    require '../date-time.php';
    require '../session-manager.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Patient - Covid19 | Robot</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
         <?php require "../module/nav.php"; ?>
         
         
        <div id="layoutSidenav">
            
            <?php require "../module/side_nav.php"; ?>
            
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h4 class="mt-4">Platform - Dashboard</h4>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="https://robot.findx.lk/">Dashboard</a></li>
                            <li class="breadcrumb-item active">View Covid-19 Status in this Hospital</li>
                        </ol>
                        <div class="row">
                            <div class="col-sm">
                                <div class="card bg-light text-dark">
                                    <div align="center" class="card-body">
                                        <div class="row">
                                            <p style="color:blue;padding:10px;"><b>TOTAL CASES</b></p>
                                            <h5 style="padding:10px;"><b>
                                                <?php
                                                    $s=0;
                                                    $sql_data_count = "SELECT * FROM patient_data WHERE status<>'0' and status<>'3' and status<>'2'";
                                                    $result_data_count = $conn_robot->query($sql_data_count);
                                                    if ($result_data_count->num_rows > 0) {
                                                      while($row_data_count = $result_data_count->fetch_assoc()) {
                                                        $s++;
                                                      }
                                                    }
                                                    echo $s;
                                                ?>
                                            </b></h5>
                                            <img style="margin-left:70px;" width="60px;" src="https://reactome.org/images/docs/for_users_110x110.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card bg-light text-dark">
                                    <div align="center" class="card-body">
                                        <div class="row">
                                            <p style="color:red;padding:10px;"><b>TOTAL DEATH</b></p>
                                            <h5 style="padding:10px;"><b>
                                                <?php
                                                    $s=0;
                                                    $sql_data_count = "SELECT * FROM patient_data WHERE status='3'";
                                                    $result_data_count = $conn_robot->query($sql_data_count);
                                                    if ($result_data_count->num_rows > 0) {
                                                      while($row_data_count = $result_data_count->fetch_assoc()) {
                                                        $s++;
                                                      }
                                                    }
                                                    echo $s;
                                                ?>
                                            </b></h5>
                                            <img style="margin-left:70px;" width="60px;" src="https://www.clipartmax.com/png/full/113-1138180_hospital-bed-patient-icon-patient-in-hospital-bed-vector-png.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card bg-light text-dark">
                                    <div align="center" class="card-body">
                                        <div class="row">
                                            <p style="color:green;padding:10px;"><b>TOTAL RECOVERED</b></p>
                                            <h5 style="padding:10px;"><b>
                                                <?php
                                                    $s=0;
                                                    $sql_data_count = "SELECT * FROM patient_data WHERE status='2' and status='0'";
                                                    $result_data_count = $conn_robot->query($sql_data_count);
                                                    if ($result_data_count->num_rows > 0) {
                                                      while($row_data_count = $result_data_count->fetch_assoc()) {
                                                        $s++;
                                                      }
                                                    }
                                                    echo $s;
                                                ?>
                                            </b></h5>
                                            <img style="margin-left:50px;" width="40px;" src="https://www.pngkey.com/png/full/77-779711_green-man-png-green-man-clipart.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <br><br>
                    </div>
                </main>
                
                
               <?php require "../module/footer.php"; ?>
               
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>