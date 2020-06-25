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
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add New Patient</li>
                        </ol>
                        <?php
                            $v = $_GET['sdghjecbssdajwBGhds22sdsbe'];
                            if($v == "Bvbwvsbsdgbdn2dsd"){
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Patient Added!</strong><br> Patient details successfully added to the system.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                <?php
                            }
                            
                            if($v == "sbnBFs21ssbcbshcbs"){
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      <strong>Oops!</strong><br> Something went wrong.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                <?php
                            }
                            
                            if($v == "56shcBVgswdansdgeb"){
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      <strong>Oops!</strong><br> Patient already registed.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                <?php
                            }
                            
                        ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="add-patine-process.php" method="post">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Patient Full Name</label>
                                    <input name="fullname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name" required>
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Age</label>
                                    <input name="age" type="text" class="form-control" id="exampleInputPassword1" placeholder="Age" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">NIC / Driving Licence</label>
                                    <input name="nic" type="text" class="form-control" id="exampleInputPassword1" placeholder="NIC / Driving Licence" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Current Address</label>
                                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Covid-Status</label>
                                    <div class="row">
                                        <div class="row">
                                            <input style="margin-left:30px;margin-top:5px;" type="radio" id="age1" name="cStatus" value="1">
                                            <label style="margin-left:10px;" for="age1"><b>Covid -19 Positive</b></label><br>
                                        </div>
                                        <div class="row">
                                            <input style="margin-left:70px;margin-top:5px;" type="radio" id="age2" name="cStatus" value="0">
                                            <label style="margin-left:10px;" for="age2"><b>Covid -19 Negative</b></label><br> 
                                        </div>
                                        <div class="row">
                                            <input style="margin-left:70px;margin-top:5px;" type="radio" id="age3" name="cStatus" value="2" checked>
                                            <label style="margin-left:10px;" for="age3"><b>Unknown</b></label>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Patient Status</label>
                                    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  <?php
                                //     $ran2 = rand();
    	                           $customize2 = "<a style='color:white;' href='https://robot.findx.lk/'>Back</a>";
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
