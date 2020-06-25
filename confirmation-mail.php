<?php

    require 'connection.php';
    
    $cus_id = $_GET['us_id'];
    
    $v_state = $_GET['ybdsKtg2453KfvgtsvdFb7df6a'];
    
    $sql_fetch_us_data = "SELECT * FROM system_user_data WHERE id='$cus_id'";
    $result_fetch_us_data = $conn_robot->query($sql_fetch_us_data);
    if ($result_fetch_us_data->num_rows > 0) {
        while($row_fetch_us_data = $result_fetch_us_data->fetch_assoc()) {
            $fname = $row_fetch_us_data['fname'];
            $lname = $row_fetch_us_data['lname'];
            $email = $row_fetch_us_data['email'];
        }
    } 
    
    $message =
    "<!DOCTYPE html>
    <html>
    <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <title></title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge' />
        <style type='text/css'>
            @media screen {
                @font-face {
                    font-family: 'Lato';
                    font-style: normal;
                    font-weight: 400;
                    src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
                }
    
                @font-face {
                    font-family: 'Lato';
                    font-style: normal;
                    font-weight: 700;
                    src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
                }
    
                @font-face {
                    font-family: 'Lato';
                    font-style: italic;
                    font-weight: 400;
                    src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
                }
    
                @font-face {
                    font-family: 'Lato';
                    font-style: italic;
                    font-weight: 700;
                    src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
                }
            }
    
            /* CLIENT-SPECIFIC STYLES */
            body,
            table,
            td,
            a {
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }
    
            table,
            td {
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
            }
    
            img {
                -ms-interpolation-mode: bicubic;
            }
    
            /* RESET STYLES */
            img {
                border: 0;
                height: auto;
                line-height: 100%;
                outline: none;
                text-decoration: none;
            }
    
            table {
                border-collapse: collapse !important;
            }
    
            body {
                height: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }
    
            /* iOS BLUE LINKS */
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
    
            /* MOBILE STYLES */
            @media screen and (max-width:600px) {
                h1 {
                    font-size: 32px !important;
                    line-height: 32px !important;
                }
            }
    
            /* ANDROID CENTER FIX */
            div[style*='margin: 16px 0;'] {
                margin: 0 !important;
            }
        </style>
    </head>
    
    <body style='background-color: #57b6fa; margin: 0 !important; padding: 0 !important;'>
        <!-- HIDDEN PREHEADER TEXT -->
        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <!-- LOGO -->
            <tr>
                <td bgcolor='#57b6fa' align='center'>
                    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                        <tr>
                            <td align='center' valign='top' style='padding: 40px 10px 40px 10px;'> </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td bgcolor='#57b6fa' align='center' style='padding: 0px 10px 0px 10px;'>
                    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                        <tr><br>
                            <td bgcolor='#ffffff' align='center' valign='top' style='padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;'>
                                <div class='logo_container'>
    								<a href='https://my-class.xyz/'>
    								    <br><br>
    									<div class='logo_text'><img src='https://image.flaticon.com/icons/png/512/36/36411.png'></div>
    								</a>
    							</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
                    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                        <tr>
                            <td bgcolor='#ffffff' align='left' style='padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                                <h1 align='center'>Hi ".$fname." ".$lname."</h1>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor='#ffffff' align='left' style='padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                                <p style='margin: 0; padding:20px; font-family: Comic Sans MS, Comic Sans, cursive;'>We're excited to have you get started. First, you need to confirm your account. Just press the button below.</p>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor='#ffffff' align='left'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                    <tr>
                                        <td bgcolor='#ffffff' align='center' style='padding: 20px 30px 60px 30px;'>
                                            <table border='0' cellspacing='0' cellpadding='0'>
                                                <tr>
                                                    <td align='center' style='border-radius: 3px;' bgcolor='#57b6fa'><a href='https://robot.findx.lk/confirmation-mail.php?ybdsKtg2453KfvgtsvdFb7df6a=gsdrssba7sd&sa=".$cus_id."' target='_blank' style='font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #57b6fa; display: inline-block;'>Confirm Account</a></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr> <!-- COPY -->
                        <tr>
                            <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                                <p style='margin: 0; padding:20px; font-family: Comic Sans MS, Comic Sans, cursive;'>If you have any questions, just contact us, we're always happy to help out.</p>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                                <p style='margin: 0; padding:20px; font-family: Comic Sans MS, Comic Sans, cursive;'>Cheers,<br>Team TechPulse &#8482;</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>";
    
    if($v_state == "ytebsdaDE4"){
        $to = $email;
        $subject = "Account Confirmation Mail";
        $header = "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        $retval = mail ($to,$subject,$message,$header);
        if($retval == true ) {
            header("location:register.php?sta=acokncon");
        }else {
            header("location:register.php?sta=errorxs");
        }
    }else if($v_state == "gsdrssba7sd"){
        $us_id = $_GET['sa'];
        $sql_confirm_mail = "UPDATE system_user_data SET em_con=1 WHERE id=$us_id";
        if ($conn_robot->query($sql_confirm_mail) === TRUE) {
            header("location:register.php?sta=conokacc");
        } else {
            //header("location:http://digi-des.com/404.php");
        }
    }
    
?>