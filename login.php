<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Covid19 | Robot</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?php
                                        
                                            if(isset($_GET['vdgjfuassnm68fba'])){
                                                if($_GET['vdgjfuassnm68fba']=="davbhcgad5c78cas64c87asc"){
                                                    ?>
                                                        <div class="alert alert-warning" role="alert">
                                                          Please login first!
                                                        </div>
                                                    <?php
                                                }
                                            }
                                        
                                            if(isset($_GET['dsagbdveyvd4ad1ev5asdsadaeSd'])){
                                                ?>
                                                    <div class="alert alert-warning" role="alert">
                                                      Email Field is Empty!
                                                    </div>
                                                <?php
                                            }
                                            
                                            if(isset($_GET['ddadgydw785dwDDfedfvceefc'])){
                                                ?>
                                                    <div class="alert alert-warning" role="alert">
                                                      Password Field is Empty!
                                                    </div>
                                                <?php
                                            }
                                            
                                            if(isset($_GET['GGdbcvysdb77s1dVcshccds'])){
                                                ?>
                                                    <div class="alert alert-warning" role="alert">
                                                      Please Check Recaptcha!
                                                    </div>
                                                <?php
                                            }
                                            if(isset($_GET['Dgd741vedfc81a1sacscDDswd51dwc'])){
                                                if($_GET['Dgd741vedfc81a1sacscDDswd51dwc']=='invalRed1sdwcF2sd12ec'){
                                                    ?>
                                                        <div class="alert alert-warning" role="alert">
                                                          Invalid Password or Email!
                                                        </div>
                                                    <?php
                                                }
                                                if($_GET['Dgd741vedfc81a1sacscDDswd51dwc']=='notconRed1sdwcF2sd12ec'){
                                                    ?>
                                                        <div class="alert alert-danger" role="alert">
                                                          Please verify your account! 
                                                          <!--<button data-toggle="modal" data-target="#myModal" style="margin-left:10%;" type="button" class="btn btn-danger">-->
                                                          <!--    <i class="fa fa-info-circle" aria-hidden="true"></i>-->
                                                          <!--</button>-->
                                                          <!-- Modal -->
                                                          <div class="modal fade" id="myModal" role="dialog">
                                                            <div class="modal-dialog modal-sm">
                                                              <div class="modal-content">
                                                                <div class="modal-body">
                                                                  <h2>How to verify account!</h2><br>
                                                                  <p>We sent an email to your email account. Please visit it and click the button which is in the email.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    <?php
                                                }
                                                if($_GET['Dgd741vedfc81a1sacscDDswd51dwc']=='notavaiRed1sdwcF2sd12ec'){
                                                    ?>
                                                        <div class="alert alert-danger" role="alert">
                                                          Account not available! Please create new account.
                                                        </div>
                                                    <?php
                                                }
                                            }
                                        ?>
                                        <script>
                                            
                                        </script>
                                        <form class="recaptchaForm" method="post" action="log-process.php">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input name="email" class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" required/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" required/>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input name="check" class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="g-recaptcha" data-sitekey="6LfCmqcZAAAAAICKDL4PI8x6ngdciP5x9C-wu_3n"></div><br>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <input class="btn btn-primary btn-block" type="submit" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
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
        <script>
            // $(document).ready(function(){
            //     $(".recaptchaForm").on('submit',function(event){
            //         var recaptcha = $("#g-recaptcha-response").val();
            //         if(recaptcha===""){
            //             event.preventDefault();
            //             alert("Please Check Recaptcha");
            //         }
            //     });
            // });
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
