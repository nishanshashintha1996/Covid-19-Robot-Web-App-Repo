<?php
/*
    require 'connection.php';
    require 'date-time.php';
    require 'session-manager.php';
    
    /*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Connect - Covid19 | Robot</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        
        
    
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.auto{
    display:none;
}
</style>
        
        
        
<script>
        
$(document).ready(function()
{
        

set_manual_mode();


});

function set_manual_mode(){
    var mode = "manual";
     $.ajax(
        {
            url : 'robot_mode_change.php',
            method : 'post',
            data :{robot_mode:mode},
            success : function(data)
            {
                //alert(data);
                    //$('#profile_pic').html(data);
                
                
            },
            
            complete: function(data) {
                //$('.loader').css("visibility", "hidden");
            }
        })
     
}


        
        
 window.addEventListener('keydown', function (e) {
         
           
    // go to the right
    if (e.keyCode == 39) {
        $('#right').css({"color":"green"});
        $('#right').css({"font-size":"62px"});
        
        var move = "right";
         $.ajax(
            {
                url : 'robot_move_process.php',
                method : 'post',
                data :{robot_move:move},
                success : function(data)
                {
                    //alert(data);
                        //$('#profile_pic').html(data);
                    
                    
                },
                
                complete: function(data) {
                    //$('.loader').css("visibility", "hidden");
                }
            })
        
        
        
    }
    
    
    // go to the left
    if (e.keyCode == 37) {
        $('#left').css({"color":"green"});
        $('#left').css({"font-size":"62px"});
        
        
        var move = "left";
         $.ajax(
            {
                url : 'robot_move_process.php',
                method : 'post',
                data :{robot_move:move},
                success : function(data)
                {
                    //alert(data);
                        //$('#profile_pic').html(data);
                    
                    
                },
                
                complete: function(data) {
                    //$('.loader').css("visibility", "hidden");
                }
            })
        
        
        
    }
    
    // go to the up
    if (e.keyCode == 38) {
        $('#front').css({"color":"green"});
        $('#front').css({"font-size":"62px"});
        
        
        var move = "front";
         $.ajax(
            {
                url : 'robot_move_process.php',
                method : 'post',
                data :{robot_move:move},
                success : function(data)
                {
                    //alert(data);
                        //$('#profile_pic').html(data);
                    
                    
                },
                
                complete: function(data) {
                    //$('.loader').css("visibility", "hidden");
                }
            })
        
        
        
        
    }
    
    
    // go to the back
    if (e.keyCode == 40) {
        $('#back').css({"color":"green"});
        $('#back').css({"font-size":"62px"});
        
        
        var move = "back";
         $.ajax(
            {
                url : 'robot_move_process.php',
                method : 'post',
                data :{robot_move:move},
                success : function(data)
                {
                    //alert(data);
                        //$('#profile_pic').html(data);
                    
                    
                },
                
                complete: function(data) {
                    //$('.loader').css("visibility", "hidden");
                }
            })
        
        
        
    }
    
    
    
    
});






 window.addEventListener('keyup', function (e) {
    // go to the right
    if (e.keyCode == 39) {
         $('#right').css({"color":"black"});
         $('#right').css({"font-size":"52px"});
         
         var move = "stop";
         $.ajax(
            {
                url : 'robot_move_process.php',
                method : 'post',
                data :{robot_move:move},
                success : function(data)
                {
                    //alert(data);
                        //$('#profile_pic').html(data);
                    
                    
                },
                
                complete: function(data) {
                    //$('.loader').css("visibility", "hidden");
                }
            })
         
         
    }
    
    
    // go to the left
    if (e.keyCode == 37) {
        $('#left').css({"color":"black"});
        $('#left').css({"font-size":"52px"});
        
        var move = "stop";
         $.ajax(
            {
                url : 'robot_move_process.php',
                method : 'post',
                data :{robot_move:move},
                success : function(data)
                {
                    //alert(data);
                        //$('#profile_pic').html(data);
                    
                    
                },
                
                complete: function(data) {
                    //$('.loader').css("visibility", "hidden");
                }
            })
            
            
    }
    
    // go to the front
    if (e.keyCode == 38) {
        $('#front').css({"color":"black"});
        $('#front').css({"font-size":"52px"});
        
        var move = "stop";
         $.ajax(
            {
                url : 'robot_move_process.php',
                method : 'post',
                data :{robot_move:move},
                success : function(data)
                {
                    //alert(data);
                        //$('#profile_pic').html(data);
                    
                    
                },
                
                complete: function(data) {
                    //$('.loader').css("visibility", "hidden");
                }
            })
        
    }
    
    
    // go to the back
    if (e.keyCode == 40) {
        $('#back').css({"color":"black"});
        $('#back').css({"font-size":"52px"});
        
        var move = "stop";
         $.ajax(
            {
                url : 'robot_move_process.php',
                method : 'post',
                data :{robot_move:move},
                success : function(data)
                {
                    //alert(data);
                        //$('#profile_pic').html(data);
                    
                    
                },
                
                complete: function(data) {
                    //$('.loader').css("visibility", "hidden");
                }
            })
        
        
    }
    
   
    
    
    
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
                        
                        <?php /*?> <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        
                         <?php /*/?>
                        
                        <div class="card mb-4" style="margin-top:20px;">
                          <?php /*?> 
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                             <?php /*/?> 
                                
                             
                             
                                
                             
                             
                            <div class="card-body" >
                                
                               <p>Auto Mode</p>
                               <label class="switch">
                                  <input type="checkbox" id="myCheck" onclick="myFunction()">
                                  <span class="slider round"></span>
                                </label>
                               
                                
                                
                                
                                    
                                <div class="auto">
                                <div class="table-responsive" align="center" >
                                    
                                    <table cellspacing="0" border="0"  style="max-width:400px;">
                                       
                                        <tbod width="100%">
                                            
                                            <tr>
                                                <td style="padding:10px;">
                                                    
                                                    <div class="form-group">
                                                        <label for="room_number_id">Room Number</label>
                                                        <select class="form-control" id="room_number_id">
                                                          <option>103L</option>
                                                          <option>102R</option>
                                                          
                                                        </select>
                                                      </div>
                                                    
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td style="padding:10px;">
                                                    
                                                    <button style="width:100%;" type="button" id="auto_mode_start" class="btn btn-outline-success">Start</button>
                                                    
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                        
                                    </table>
                                    
                                    
                                    
                                    
                                    
                                </div>
                                
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                   
                               
                                <div class="manual">
                                <div class="table-responsive" align="center">
                                    
                                    <table cellspacing="0" border="0" class="">
                                       
                                        <tbody>
                                            <tr>
                                                <td  style="padding:10px;height:90px;width:90px;"></td>
                                                <td style="padding:10px;height:90px;width:90px;"><i id="front" style="font-size:52px;" class="far fa-arrow-alt-circle-up"></i></td>
                                                <td style="padding:10px;height:90px;width:90px;"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px;height:90px;width:90px;"><i id="left" style="font-size:52px;" class="far fa-arrow-alt-circle-left"></i></td>
                                                <td style="padding:10px;height:90px;width:90px;"></td>
                                                <td style="padding:10px;height:90px;width:90px;"><i id="right" style="font-size:52px;" class="far fa-arrow-alt-circle-right"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px;height:90px;width:90px;"></td>
                                                <td style="padding:10px;height:90px;width:90px;"><i id="back" style="font-size:52px;" class="far fa-arrow-alt-circle-down"></i></td>
                                                <td style="padding:10px;height:90px;width:90px;"></td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>
                                    
                                    
                                    
                                    
                                    
                                </div>
                                </div>
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive" align="center" >
                                    
                                    <table cellspacing="0" border="0"  width="100%">
                                       
                                        <tbod width="100%">
                                            
                                            <tr>
                                                <td style="padding:10px;">
                                                    
                                                    <div class="card bg-light mb-3" >
                                                      <div class="card-header">Open Medicine Try</div>
                                                      <div class="card-body">
                                                        
                                                        <label class="switch">
                                                          <input type="checkbox" id="mediTray" onclick="mediTray()">
                                                          <span class="slider round"></span>
                                                        </label>
                                                    
                                                    
                                                        </div>
                                                    </div>
                                                                    
                                                </td>
                                                
                                                
                                                <td style="padding:10px;">
                                                    
                                                    
                                                    
                                                    <div class="card bg-light mb-3" >
                                                      <div class="card-header">Open Food Try</div>
                                                      <div class="card-body">
                                                        
                                                        <label class="switch">
                                                          <input type="checkbox" id="foodTray" onclick="foodTray()">
                                                          <span class="slider round"></span>
                                                        </label>
                                                    
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                   
                                                                        
                                                </td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                        
                                    </table>
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
                                      $("#hide").click(function(){
                                        $("#full").hide();
                                      });
                                      $("#show").click(function(){
                                        $("#full").show();
                                      });
                                    });
                                </script>
                                <script>
                                    $(document).ready(function(){
                                    	load_order_data();
                                    	function load_order_data(query)
                                    	{
                                    		$.ajax({
                                    			url:"filter-patients_for_robot.php",
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
                                    
                                    
                                    
                                    
                        </div>
                    </div>
                    
                </main>
                
                <?php require "module/footer.php"; ?>
                
            </div>
        </div>
        
        
        <script>
        
            
        $('#auto_mode_start').click(function() {
            
           var room_id = $('#room_number_id :selected').text();
             $.ajax(
                {
                    url : 'set_room_number.php',
                    method : 'post',
                    data :{room_number:room_id},
                    success : function(data)
                    {
                        //alert(data);
                            //$('#profile_pic').html(data);
                        
                        
                    },
                    
                    complete: function(data) {
                        //$('.loader').css("visibility", "hidden");
                    }
                })
            
        })

            
            
                
        
        
        
            function myFunction() {
              var checkBox = document.getElementById("myCheck");
              var text = document.getElementById("text");
              if (checkBox.checked == true){
                  
                  $('.manual').css({"display":"none"});
                  $('.auto').css({"display":"inline"});
                  
                 var mode = "auto";
                 $.ajax(
                    {
                        url : 'robot_mode_change.php',
                        method : 'post',
                        data :{robot_mode:mode},
                        success : function(data)
                        {
                            //alert(data);
                                //$('#profile_pic').html(data);
                            
                            
                        },
                        
                        complete: function(data) {
                            //$('.loader').css("visibility", "hidden");
                        }
                    })
                  
                  
                  
                  
                  
                //alert("checked");
              } else {
                  
                  $('.manual').css({"display":"inline"});
                  $('.auto').css({"display":"none"});
                 //alert("unchecked");
                 
                 var mode = "manual";
                 $.ajax(
                    {
                        url : 'robot_mode_change.php',
                        method : 'post',
                        data :{robot_mode:mode},
                        success : function(data)
                        {
                            //alert(data);
                                //$('#profile_pic').html(data);
                            
                            
                        },
                        
                        complete: function(data) {
                            //$('.loader').css("visibility", "hidden");
                        }
                    })
                 
                 
                 
                 
              }
            }
            
            
            
            
            
            
            function mediTray() {
              var checkBox = document.getElementById("mediTray");
            
              if (checkBox.checked == true){
                  
                  var medi_tray = 1;
                 $.ajax(
                    {
                        url : 'meditray_open.php',
                        method : 'post',
                        data :{medi_tray:medi_tray},
                        success : function(data)
                        {
                            //alert(data);
                                //$('#profile_pic').html(data);
                            
                            
                        },
                        
                        complete: function(data) {
                            //$('.loader').css("visibility", "hidden");
                        }
                    })
                  
                  
                  
                  
                  
                //alert("checked");
              } else {
                  
                  var medi_tray = 0;
                 $.ajax(
                    {
                        url : 'meditray_open.php',
                        method : 'post',
                        data :{medi_tray:medi_tray},
                        success : function(data)
                        {
                            //alert(data);
                                //$('#profile_pic').html(data);
                            
                            
                        },
                        
                        complete: function(data) {
                            //$('.loader').css("visibility", "hidden");
                        }
                    })
                 
                 
                 
                 
              }
            }
            
            
            
            
            
            
            
            
            
            
            function foodTray() {
              var checkBox = document.getElementById("foodTray");
            
              if (checkBox.checked == true){
                  
                  var foodTray = 1;
                 $.ajax(
                    {
                        url : 'food_tray_open.php',
                        method : 'post',
                        data :{foodTray:foodTray},
                        success : function(data)
                        {
                            //alert(data);
                                //$('#profile_pic').html(data);
                            
                            
                        },
                        
                        complete: function(data) {
                            //$('.loader').css("visibility", "hidden");
                        }
                    })
                  
                  
                  
                  
                  
                //alert("checked");
              } else {
                  
                  var foodTray = 0;
                 $.ajax(
                    {
                        url : 'food_tray_open.php',
                        method : 'post',
                        data :{foodTray:foodTray},
                        success : function(data)
                        {
                            //alert(data);
                                //$('#profile_pic').html(data);
                            
                            
                        },
                        
                        complete: function(data) {
                            //$('.loader').css("visibility", "hidden");
                        }
                    })
                 
                 
                 
                 
              }
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
