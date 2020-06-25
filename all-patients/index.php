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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                            <li class="breadcrumb-item active">View All Patients</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Search Patient
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Search Patinet">
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
                                        var x = 'all';
                                    	load_order_data2(x);
                                    	function load_order_data(query)
                                    	{
                                    		$.ajax({
                                    			url:"../filter-patients.php",
                                    			method:"post",
                                    			data:{query:query},
                                    			success:function(data)
                                    			{
                                    				$('#result').html(data);
                                    			}
                                    		});
                                    	}
                                    	
                                    	function load_order_data2(alldata)
                                    	{
                                    		$.ajax({
                                    			url:"../filter-patients.php",
                                    			method:"post",
                                    			data:{alldata:alldata},
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
                                    		    var x = 'all';
                                    			load_order_data2(x);
                                    		}
                                    	});
                                    });
                                </script>
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