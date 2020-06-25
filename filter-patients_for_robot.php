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
	LIMIT 1";
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
    	    $customize = "<button class='btn btn-success' id='show'><i class='fa fa-arrows-alt'></i></button>";
    	    if($row["d_id"]==$id){
    	        $doc_name="You";
    	    }else{
    	        $q = $row["d_id"];
    	        $sql_fetch_doctor_data = "SELECT * FROM system_user_data WHERE id='$q'";
                $result_fetch_doctor_data = $conn_robot->query($sql_fetch_doctor_data);
                if ($result_fetch_doctor_data->num_rows > 0) {
                  while($row_fetch_doctor_data = $result_fetch_doctor_data->fetch_assoc()) {
                      $doc_name = "Dr. ".$row_fetch_doctor_data['fname']." ".$row_fetch_doctor_data['lname'];
                  }
                }
    	    }
    	    $status;
    	    if($row['status']==0){
    	        $status = "Covid -19 Negative";
    	    }
    	    if($row['status']==1){
    	        $status = "Covid -19 Positive";
    	    }
    	    if($row['status']==2){
    	        $status = "Recovered";
    	    }
    	    if($row['status']==3){
    	        $status = "Dead";
    	    }
    		$output .= '
    			<tr>
    				<td style="background-color:#e6ffe6;"><button type="button" class="btn btn-link">'.$row["name"].'</button></td>
    				<td>'.$row["nic"].'</td>
    				<td>'.$doc_name.'</td>
    				<td>'.$customize.'</td>
    			</tr>
    			
    			<table style="display:none;border: 2px solid blue;" id="full" class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">NIC</th>
                      <th scope="col">Age</th>
                      <th scope="col">Address</th>
                      <th scope="col">Covid Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">'.$row['name'].'</th>
                      <td>'.$row['nic'].'</td>
                      <td>'.$row['age'].'</td>
                      <td>'.$row['address'].'</td>
                      <td>'.$status.'</td>
                    </tr>
                  </tbody>
                </table>
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
    		';
    	}
    	echo $output;
    }else{
        echo "No result";
    }
?>