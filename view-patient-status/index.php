<!DOCTYPE html>
<?php
    require '../connection.php';
    require '../date-time.php';
    require '../session-manager.php';
    $id_tem = mysqli_real_escape_string($conn_robot, $_GET['gGFdjehbBuwbxbsdbwdjcb']);
    $ran = mysqli_real_escape_string($conn_robot, $_GET['sGehcbchcbshdsd']);
    $tem = $id_tem-$ran;
    $sql_fetch_patient_data = "SELECT * FROM patient_data WHERE id='$tem'";
    $result_fetch_patient_data = $conn_robot->query($sql_fetch_patient_data);
    if ($result_fetch_patient_data->num_rows > 0) {
      while($row_fetch_patient_data = $result_fetch_patient_data->fetch_assoc()) { 
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
                            <li class="breadcrumb-item active">View Patient Data</li>
                        </ol>
                        <div class="row">
                            <div class="col-sm">
                                <p class="h6">Name</p>
                                <div class="card bg-light text-dark">
                                    <div class="card-body"><?php echo $row_fetch_patient_data['name'];?></div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <p class="h6">Age</p>
                                <div class="card bg-light text-dark">
                                    <div class="card-body"><?php echo $row_fetch_patient_data['age'];?></div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <p class="h6">NIC</p>
                                <div class="card bg-light text-dark">
                                    <div class="card-body"><?php echo $row_fetch_patient_data['nic'];?></div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm">
                                <p class="h6">Address</p>
                                <div class="card bg-light text-dark">
                                    <div class="card-body"><?php echo htmlspecialchars($row_fetch_patient_data['address']);?></div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm">
                                <p class="h6">Patient Status</p>
                                <div class="card" style="width: 100%;">
                                  <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-10">
                                            <h6 style="text-align: justify;" class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($row_fetch_patient_data['comment']);?></h6>
                                        </div>
                                        <?php
                                            if($row_fetch_patient_data['d_id']==$id){
                                        ?>
                                            <div class="col-xl-2">
                                                <div class="card mb-4">
                                                    <?php
                                                        $ran = rand();
            	                                        $customize = "https://robot.findx.lk/edit-patient-data/?gGFdjehbBuwbxbsdbwdjcb=".($tem+$ran)."&sGehcbchcbshdsd=".$ran;
                                                    ?>
                                                    <a href="<?php echo $customize;?>">
                                                        <div align="center" class="card-header">
                                                            <i class="fa fa-edit"></i>
                                                            Edit Status
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm">
                                <p class="h6">Patient reports</p>
                                <div class="card" style="width: 100%;">
                                  <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-10">
                                            <div class="card mb-4">
                                                    <div class="row">
                                                        <?php
                                                            $sql_fetch_files = "SELECT * FROM patient_reports WHERE d_id='$id' and p_id='$tem'";
                                                            $result_fetch_files = $conn_robot->query($sql_fetch_files);
                                                            if ($result_fetch_files->num_rows > 0) {
                                                              while($row_fetch_files = $result_fetch_files->fetch_assoc()) {
                                                                $file_name = $row_fetch_files['file_name'];
                                                                $location = $row_fetch_files['location'];
                                                                $imageFileType = $row_fetch_files['file_type'];
                                                                $date_time = $row_fetch_files['date_time'];
                                                                $title = $row_fetch_files['title'];
                                                                $description = $row_fetch_files['description'];
                                                                // echo $file_name,$location,$file_type,$date_time;
                                                                
                                                                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                                                && $imageFileType != "gif" ) {
                                                                    ?>
                                                                        <div style="margin-left:15px;margin-top:10px;margin-bottom:10px;">
                                                                            <div class="card" style="width: 17rem;">
                                                                              <img class="card-img-top" width="100px;" style="padding:10px;" src="https://cdn2.iconfinder.com/data/icons/social-media-2259/512/docs-512.png" alt="Card image cap">
                                                                              <div class="card-body">
                                                                                <h5 class="card-title"><?php echo $title;?></h5>
                                                                                <p class="card-text"><?php echo $description."</br></br>".$date_time;?></p>
                                                                                <a href="<?php echo $location.$file_name."?gsbahgebcavhsdbhehc55d2e5asvbebavsda233efavsdhvesdba";?>" class="btn btn-primary">Download</a>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                        <div style="margin-left:15px;margin-top:10px;margin-bottom:10px;">
                                                                            <div class="card" style="width: 17rem;">
                                                                              <img class="card-img-top" width="100px;" style="padding:10px;" src="<?php echo $location.$file_name;?>" alt="Card image cap">
                                                                              <div class="card-body">
                                                                                <h5 class="card-title"><?php echo $title;?></h5>
                                                                                <p class="card-text"><?php echo $description."</br></br>".$date_time;?></p>
                                                                                <a href="<?php echo $location.$file_name."?gsbahgebcavhsdbhehc55d2e5asvbebavsda233efavsdhvesdba";?>" class="btn btn-primary">Download</a>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php
                                                                }
                                                              }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                        </div>
                                        <?php
                                            if($row_fetch_patient_data['d_id']==$id){
                                        ?>
                                            <div class="col-xl-2">
                                                <div class="card mb-4">
                                                    <?php
                                                        $ran = rand();
            	                                        $customize = "https://robot.findx.lk/edit-patient-data/?gGFdjehbBuwbxbsdbwdjcb=".($tem+$ran)."&sGehcbchcbshdsd=".$ran;
                                                    ?>
                                                    <a href="<?php echo $customize;?>">
                                                        <div align="center" class="card-header">
                                                            <i class="fa fa-upload"></i>
                                                            Upload
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                  </div>
                                </div><br><br>
                                <?php
                                //     $ran2 = rand();
    	                           $customize2 = "<a style='color:white;' href='https://robot.findx.lk/'>Back</a>";
                                  ?>
                                  <button type="button"  class="btn btn-success"><?php echo $customize2;?></button>
                            </div>
                        </div><br><br>
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
<?php
      }
    } 
?>