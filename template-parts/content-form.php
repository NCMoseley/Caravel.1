<?php
    if (isset($_POST['email']) == true) {
        $displayInput = false;

        
        $to = $_POST['email'];
        $subject = "Submit was a Success!";

        $message = '
        <html>
        <head>
        <title>ETS</title>
        </head>';
        $message .=
        
    '<body style="margin: 0; padding: 0; bgcolor: #eeeeee ">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
         <tr>
            <td style="padding: 20px 0 30px 0;">
              <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc;">
                  <tr>
                    <td align="center" bgcolor="#b5d3e7" style="padding: 40px 0 30px 0;">
                      <img src="" alt="Creating Email Magic" width="450" height="80" style="display: block;" />
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#f8f8f8" style="padding: 40px 30px 40px 30px;">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%">
                       <tr>
                        <td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tr>
                                <td style="color: #ecb42b; font-family: Helvetica, Arial, Verdana, "Trebuchet MS"; font-size: 24px;">
                                  <b>You have successfully registered!</b>
                                </td>
                              </tr>
                              <tr>
                               <td style="padding: 20px 0 30px 0; color: #ecb42b; font-family: Helvetica, Arial, Verdana, "Trebuchet MS"; font-size: 16px; line-height: 20px;">
                                We are just putting the finishing touches on the magazine. We appreciate your support, and will send the magazine as soon as it is complete.
                               </td>
                              </tr>
                            </table>
                          </td>
                       </tr>
                      </table>
                    </td>               
                  </tr>
                  <tr>
                    <td bgcolor="#b5d3e7" style="padding: 30px 30px 30px 30px;">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                          <td style="color: #001d48; font-family: Helvetica, Arial, Verdana, "Trebuchet MS"; font-size: 16px; line-height: 20px;">
                          &copy;  2018. All Rights Reserved.
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>        
          </td>
         </tr>
        </table>
       </body>
      
       ';

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <ncmoseley@gmail.com>' . "\r\n";
        mail($to, $subject, $message, $headers);
        $toMe = "ncmoseley@gmail.com";
        $subjectMine = "Someone Submitted Contact form";
        $txt = $_POST['email'] . " just submitted";
        $headersMine = "From: webmaster@example.com";
        mail($toMe, $subjectMine, $txt, $headersMine);
    } else {
        $displayInput = true;
    }
