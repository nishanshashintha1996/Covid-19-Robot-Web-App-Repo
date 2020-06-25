<?php
    require 'connection.php';
    require 'date-time.php';
    require 'session-manager.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Covid19 | Robot</title>
        <link href="css/styles.css" rel="stylesheet" />
        <!--<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
                //alert("loaded");
                show_covid19_update();
            });
        </script>
    </head>
    <body class="sb-nav-fixed">
        
        <?php require "module/nav.php"; ?>
        
        <div id="layoutSidenav">
            
            <?php require "module/side_nav.php"; ?>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h4 class="mt-4">Platform - Dashboard</h4>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?php echo "<b>".$fname." ".$lname."</b>";?></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Sri Lanka Covid-19 Status
                                    </div>
                                    <div style="padding:10px;" id="covid_update"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4"><a href="https://robot.findx.lk/add-new-patient/">
                                    <div style="color:white;" align="center" class="card-body"><b>Add Petient</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <img style="padding:30px;" width="100%" src="https://cdn0.iconfinder.com/data/icons/virus-medical/567/virus_wearing_mask-512.png">
                                        <!--<div class="small text-white"><i class="fas fa-angle-right"></i></div>-->
                                    </a></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4"><a href="">
                                    <div style="color:white;" align="center" class="card-body"><b>Add Robot</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <img style="padding:30px;" width="100%" src="https://pngimg.com/uploads/robot/robot_PNG94.png">
                                        <!--<div class="small text-white"><i class="fas fa-angle-right"></i></div>-->
                                    </a></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4"><a href="https://robot.findx.lk/all-patients/">
                                    <div style="color:white;" align="center" class="card-body"><b>View All Patients</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <img style="padding:45px;" width="100%" src="https://freesvg.org/img/group.png">
                                        <!--<div class="small text-white"><i class="fas fa-angle-right"></i></div>-->
                                    </a></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4"><a href="https://robot.findx.lk/view-hospital-covid-patients-status/">
                                    <div style="color:white;" align="center" class="card-body"><b>Hospital Covid-19 Status</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <img style="padding:30px;" width="100%" src="https://img.icons8.com/plasticine/2x/hospital-room.png">
                                        <!--<div class="small text-white"><i class="fas fa-angle-right"></i></div>-->
                                    </a></div>
                                </div>
                            </div>
                        </div>
                        <div style="border: 1px solid Green;" class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Search Patient
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Search Patient">
                                    </div>
                                    <div class="form-group col-md-10">
                                        <form action="">
                                            <input type="text" class="form-control" id="search_text" placeholder="Name / NIC">
                                        </form>
                                    </div>
                                  </div>
                                <br>
                                <div class="table-responsive">
                                    <div id="result"></div>
                                </div>
                                <script>
                                    $(document).ready(function(){
                                    	load_order_data();
                                    	function load_order_data(query)
                                    	{
                                    		$.ajax({
                                    			url:"filter-patients.php",
                                    			method:"post",
                                    			data:{query:query},
                                    			success:function(data)
                                    			{
                                    				$('#result').html(data);
                                    			}
                                    		});
                                    	}
                                    	$('#search_text').keyup(function(){
                                    		var search = $(this).val();
                                    		if(search != '')
                                    		{
                                    		    load_order_data(search);
                                    		}
                                    		else
                                    		{
                                    			load_order_data();
                                    		}
                                    	});
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        Recent Edited Patients
                                    </div>
                                    <?php
                            
                                        $sql_recent_edit_one = "SELECT * FROM patient_data WHERE recent_order=1 and d_id='$id'";
                                        $result_recent_edit_one = $conn_robot->query($sql_recent_edit_one);
                                        if ($result_recent_edit_one->num_rows > 0) {
                                          while($row_recent_edit_one = $result_recent_edit_one->fetch_assoc()) {
                                              $ran = rand();
                                            ?>
                                                <div class="card" style="width: 100%;">
                                                  <div class="card-body">
                                                    <h5 class="card-title"><?php echo $row_recent_edit_one['name'];?></h5>
                                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $row_recent_edit_one['nic'];?></h6>
                                                    <p class="card-text"><?php echo $row_recent_edit_one['comment'];?></p>
                                                    <a href="https://robot.findx.lk/edit-patient-data/?gGFdjehbBuwbxbsdbwdjcb=<?php echo $row_recent_edit_one['id']+$ran;?>&sGehcbchcbshdsd=<?php echo $ran;?>" class="card-link">Edit</a>
                                                    <a href="https://robot.findx.lk/view-patient-status/?gGFdjehbBuwbxbsdbwdjcb=<?php echo $row_recent_edit_one['id']+$ran;?>&sGehcbchcbshdsd=<?php echo $ran;?>" class="card-link">View</a>
                                                  </div>
                                                </div>
                                            <?php
                                          }
                                        }
                                    
                                    ?>
                                    <?php
                            
                                        $sql_recent_edit_one = "SELECT * FROM patient_data WHERE recent_order=2 and d_id='$id'";
                                        $result_recent_edit_one = $conn_robot->query($sql_recent_edit_one);
                                        if ($result_recent_edit_one->num_rows > 0) {
                                          while($row_recent_edit_one = $result_recent_edit_one->fetch_assoc()) {
                                              $ran = rand();
                                            ?>
                                                <div class="card" style="width: 100%;">
                                                  <div class="card-body">
                                                    <h5 class="card-title"><?php echo $row_recent_edit_one['name'];?></h5>
                                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $row_recent_edit_one['nic'];?></h6>
                                                    <p class="card-text"><?php echo $row_recent_edit_one['comment'];?></p>
                                                    <a href="https://robot.findx.lk/edit-patient-data/?gGFdjehbBuwbxbsdbwdjcb=<?php echo $row_recent_edit_one['id']+$ran;?>&sGehcbchcbshdsd=<?php echo $ran;?>" class="card-link">Edit</a>
                                                  </div>
                                                </div>
                                            <?php
                                          }
                                        }
                                    
                                    ?>
                                </div>
                            </div>
                            <!--<div class="col-xl-6">-->
                            <!--    <div class="card mb-4">-->
                            <!--        <div class="card-header">-->
                            <!--            <i class="fas fa-chart-bar mr-1"></i>-->
                            <!--            Bar Chart Example-->
                            <!--        </div>-->
                            <!--        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </main>
                
                <?php require "module/footer.php"; ?>
                
            </div>
        </div>
        <script>
            function show_covid19_update()
            {
                //$('.loader').css("visibility", "visible");
                $.ajax(
                {
                    url : 'show_covid_update.php',
                    method : 'post',
                    success : function(data)
                    {
                        //alert(data);
                            $('#covid_update').html(data);
                        
                        
                    },
                    
                    complete: function(data) {
                        //$('.loader').css("visibility", "hidden");
                    }
                })
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
