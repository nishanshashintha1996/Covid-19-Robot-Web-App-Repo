<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - Covid19 | Robot</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script>
        //   $(function () {
    
        //     $('form').on('submit', function (e) {
    
        //       e.preventDefault();
    
        //       $.ajax({
        //         type: 'post',
        //         url: 'reg-process.php',
        //         data: $('form').serialize(),
        //         success: function () {
        //           alert(data);
        //         }
        //       });
    
        //     });
    
        //   });
        </script>
        
        <script>
        $(document).ready(function(){
            var x = "<?php echo $_GET['sta'];?>";
            if(x=='acokncon'){
                $('#myModal1').modal('show');
            }
            if(x=='errorxs'){
                $('#myModal2').modal('show');
            }
        });
        </script>
    </head>
    <body class="bg-primary">
          <!-- Modal1 -->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-body">
                        <h1 align="center">Account Successfully Created!</h1><br>
                        <p align="center" style="color:green;"><b>The email was sent to your email address. Before using this robot platform you need to confirm your email address.<br>
                        Please visit your email and click the button which is in the email we sent. <br><span style="color:red;">Make sure to check your spam mail folder</span><br></p></b>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
                </div>
              </div>
            </div>
          </div>
        <!-- Modal2 -->
          <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="row">
                    <div align="center" class="col-sm">
                      <img width="200px;" src="https://media3.giphy.com/media/8L0Pky6C83SzkzU55a/giphy.gif">
                    </div>
                    <div align="center" class="col-9">
                        <h1>Oops.....!</h1><br>
                        <p style="color:red;"><b>There is some administration error.<br>
                        Please contact administration.<br></p></b>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
                </div>
              </div>
            </div>
          </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="reg-process.php" method="post">
                                            <?php
                                                if(isset($_GET['f'])){
                                                    ?>
                                                        <div class="alert alert-warning" role="alert">
                                                          First Name Field Empty!
                                                        </div>
                                                    <?php
                                                }
                                                if(isset($_GET['l'])){
                                                    ?>
                                                        <div class="alert alert-warning" role="alert">
                                                          Last Name Field Empty!
                                                        </div>
                                                    <?php
                                                }
                                                if(isset($_GET['em'])){
                                                    ?>
                                                        <div class="alert alert-warning" role="alert">
                                                          Email Field Empty!
                                                        </div>
                                                    <?php
                                                }
                                                if(isset($_GET['p'])){
                                                    ?>
                                                        <div class="alert alert-warning" role="alert">
                                                          Password Field Empty!
                                                        </div>
                                                    <?php
                                                }
                                                if(isset($_GET['cP'])){
                                                    ?>
                                                        <div class="alert alert-warning" role="alert">
                                                          Confirmation Password Field Empty!
                                                        </div>
                                                    <?php
                                                }
                                                if(isset($_GET['pC'])){
                                                    ?>
                                                        <div class="alert alert-warning" role="alert">
                                                          Passwords are does not match!
                                                        </div>
                                                    <?php
                                                }
                                                
                                                if(isset($_GET['sta'])){
                                                    $x = $_GET['sta'];
                                                    if ($x == 'acokncon'){
                                                        ?>
                                                            <div class="alert alert-success" role="alert">
                                                              Account Created! Login Now.
                                                            </div>
                                                        <?php
                                                    }
                                                    if ($x == 'errorxs'){
                                                        ?>
                                                            <div class="alert alert-warning" role="alert">
                                                              System Error! Please Contact Administration.
                                                            </div>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input name="fname" class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input name="lname" class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input name="email" class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Account Type</label>
                                                <select name="acc_type" class="form-control" id="exampleFormControlSelect1">
                                                  <option value="Doctor">Doctor</option>
                                                  <option value="Patient">Patient</option>
                                                </select>
                                              </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input name="cPassword" class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                    <input class="btn btn-primary btn-block" name="submit" type="submit" value="Create Account">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div><br><br>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; FindX.lk 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
