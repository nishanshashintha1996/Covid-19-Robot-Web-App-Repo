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
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Patient Data</li>
                        </ol>
                        <?php
                            $v = $_GET['sdghjecbssdajwBGhds22sdsbe'];
                            if($v[0] == "1"){
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Updated!</strong><br> Patient name successfully updated.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                <?php
                            }
                            if($v[1] == "1"){
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Updated!</strong><br> Patient age successfully updated.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                <?php
                            }
                            if($v[2] == "1"){
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Updated!</strong><br> Patient nic successfully updated.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                <?php
                            }
                            if($v[3] == "1"){
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Updated!</strong><br> Patient address successfully updated.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                <?php
                            }
                            if($v[4] == "1"){
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Updated!</strong><br> Patient status successfully updated.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                <?php
                            }
                            if($v[5] == "1"){
                                ?>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                      <strong>Uploaded Success!</strong><br> Your file has been uploaded.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                <?php
                            }
                            if($v[6] == "1"){
                                ?>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                      <strong>Updated!</strong><br> Patient Covid status successfully updated.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                <?php
                            }
                        ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="edit-patine-process.php" method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Patient Full Name</label>
                                    <input value="<?php echo $row_fetch_patient_data['name'];?>" name="fullname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name" required>
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Age</label>
                                    <input value="<?php echo $row_fetch_patient_data['age'];?>" name="age" type="text" class="form-control" id="exampleInputPassword1" placeholder="Age" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">NIC / Driving Licence</label>
                                    <input value="<?php echo $row_fetch_patient_data['nic'];?>" name="nic" type="text" class="form-control" id="exampleInputPassword1" placeholder="NIC / Driving Licence" required>
                                  </div>
                                  <input value="<?php echo $tem;?>" name="id" type="hidden" >
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Current Address</label>
                                    <textarea  name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" required><?php echo htmlspecialchars($row_fetch_patient_data['address']);?></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Covid-Status</label>
                                    <div class="row">
                                        <div class="row">
                                            <input style="margin-left:30px;margin-top:5px;" type="radio" id="age1" name="cStatus" value="1">
                                            <label style="margin-left:10px;" for="age1"><b>Covid -19 Positive</b></label><br>
                                        </div>
                                        <div class="row">
                                            <input style="margin-left:60px;margin-top:5px;" type="radio" id="age2" name="cStatus" value="0">
                                            <label style="margin-left:10px;" for="age2"><b>Covid -19 Negative</b></label><br> 
                                        </div>
                                        <div class="row">
                                            <input style="margin-left:60px;margin-top:5px;" type="radio" id="age3" name="cStatus" value="2">
                                            <label style="margin-left:10px;" for="age3"><b>Recovered</b></label>
                                        </div>
                                        <div class="row">
                                            <input style="margin-left:60px;margin-top:5px;" type="radio" id="age4" name="cStatus" value="3">
                                            <label style="margin-left:10px;" for="age4"><b>Dead</b></label>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Patient Status</label>
                                    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3" required><?php echo htmlspecialchars($row_fetch_patient_data['comment']);?></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Report Upload</label>
                                    <div class="card bg-light">
                                    <div class="card-body text-center">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                      </div>
                                  <br><br><br>
                                  <div class="form-group">
                                    <input  name="file_title" type="text" class="form-control" id="exampleInputPassword1" placeholder="File Name">
                                  </div>
                                  <div class="form-group">
                                    <input  name="file_description" type="text" class="form-control" id="exampleInputPassword1" placeholder="File Description">
                                  </div>
                                    </div>
                                  </div>
                                  </div>
                                  <br><br>
                                  <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                  <?php
                                    $ran2 = rand();
    	                            $customize2 = "<a style='color:white;' href='https://robot.findx.lk/view-patient-status/?gGFdjehbBuwbxbsdbwdjcb=".($tem+$ran2)."&sGehcbchcbshdsd=".$ran2."'>Show</a>";
                                  ?>
                                  <button type="button"  class="btn btn-success"><?php echo $customize2;?></button>
                                </form>
                            </div>
                        </div>
                        
                        
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