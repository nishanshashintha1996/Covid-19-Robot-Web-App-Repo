<?php
$content =     file_get_contents("https://www.hpb.health.gov.lk/api/get-current-statistical");

$result  = json_decode($content);


$update_time =  $result->data->update_date_time;
$local_new_cases =  $result->data->local_new_cases;
$local_total_cases =  $result->data->local_total_cases;
$local_total_number_of_individuals_in_hospitals =  $result->data->local_total_number_of_individuals_in_hospitals;
$local_deaths =  $result->data->local_deaths;
$local_new_deaths =  $result->data->local_new_deaths;
$local_recovered =  $result->data->local_recovered;





?>


<?php
/*
echo "Total Confirmed Cases : ".$local_total_cases."<br>";
echo "Deaths : ".$local_deaths."<br>";
echo "Recovered & Discharged : ".$local_recovered."<br>";
echo "Suspected & Hospitalized : ".$local_total_number_of_individuals_in_hospitals."<br>";

?>

<h2>Today</h2>

<?php
echo "<br>"."New Cases : ".$local_new_cases."<br>";
echo "Deaths : ".$local_new_deaths."<br>";
//echo "Recovered & Discharged : "

*/

?>

         <div class="row">
  <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Cases</div>
                                            <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $local_total_cases; ?></div>
                                                </div>
                                                                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-2x text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Death</div>
                                            <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $local_deaths; ?></div>
                                                </div>
                                                                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-bed fa-2x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Recovered</div>
                                            <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $local_recovered; ?></div>
                                                </div>
                                                                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-child fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">New Cases</div>
                                            <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $local_new_cases; ?></div>
                                                </div>
                                                                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-bell fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  </div> 