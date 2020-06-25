<?php

require 'connection.php';
require 'date-time.php';
require 'session-manager.php';

$output = '';
if(isset($_POST["alldata"])){
    $search = mysqli_real_escape_string($conn_robot, $_POST["query"]);
    $query = "SELECT * FROM patient_data";
}

if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn_robot, $_POST["query"]);
	$query = "
	SELECT * FROM patient_data 
	WHERE name LIKE '%".$search."%'
	OR nic LIKE '%".$search."%'
	LIMIT 2";
}
    $result = mysqli_query($conn_robot, $query);
    if(mysqli_num_rows($result) > 0)
    {
    	$output .= '<div class="table-responsive" style="padding:10px; border: 2px solid black;">
    					<table class="table table bordered">
    						<tr>
    							<th>Patient Name</th>
    							<th>NIC</th>
    							<th>Doctor</th>
    							<th></th>
    						</tr>';
    	while($row = mysqli_fetch_array($result))
    	{
    	    $doc_name;
    	    $customize;
    	    $ran2 = rand();
    	    $customize2 = "<a href='https://robot.findx.lk/view-patient-status/?gGFdjehbBuwbxbsdbwdjcb=".($row['id']+$ran2)."&sGehcbchcbshdsd=".$ran2."'>".$row['name']."</a>";
    	    if($row["d_id"]==$id){
    	        $ran = rand();
    	        $customize = "<button type='button' class='btn btn-success'><a style='color:white;' href='https://robot.findx.lk/edit-patient-data/?gGFdjehbBuwbxbsdbwdjcb=".($row['id']+$ran)."&sGehcbchcbshdsd=".$ran."'><i class='fas fa-edit'></i></a></button>";
    	        $doc_name="You";
    	    }else{
    	        $customize = "";
    	        $q = $row["d_id"];
    	        $sql_fetch_doctor_data = "SELECT * FROM system_user_data WHERE id='$q'";
                $result_fetch_doctor_data = $conn_robot->query($sql_fetch_doctor_data);
                if ($result_fetch_doctor_data->num_rows > 0) {
                  while($row_fetch_doctor_data = $result_fetch_doctor_data->fetch_assoc()) {
                      $doc_name = "Dr. ".$row_fetch_doctor_data['fname']." ".$row_fetch_doctor_data['lname'];
                  }
                }
    	    }
    	   
    		$output .= '
    			<tr>
    				<td style="background-color:#e6ffe6;"><button type="button" class="btn btn-link">'.$customize2.'</button></td>
    				<td>'.$row["nic"].'</td>
    				<td>'.$doc_name.'</td>
    				<td>'.$customize.'</td>
    			</tr>
    		';
    	}
    	echo $output;
    }
?>