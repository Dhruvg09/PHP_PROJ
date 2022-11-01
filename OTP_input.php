<?php
          $id=$_POST['id'];
          $name=$_POST['name'];
          $gen=$_POST['gen'];
          $mob=$_POST['mob'];
          $mail=$_POST['mail'];
          $dept=$_POST['dept'];
          $sal=$_POST['sal'];
          $doj=$_POST['doj'];
          $dor=$_POST['dor'];

          require('Main_function.php');
          $otp=rand(10000,99999);
          $res=sendOTP($mail,$otp);
            echo "<form method=\"post\" action=\"Insert.php\" >
                  Enter your OTP: <input type=\"number\" value=\"OTP\" name=\"otp\">
                  <input type=\"hidden\" value=\"$id\" name=\"id\">
                  <input type=\"hidden\" value=\"$name\" name=\"name\">
                  <input type=\"hidden\" value=\"$gen\" name=\"gen\">
                  <input type=\"hidden\" value=\"$mob\" name=\"mob\">
                  <input type=\"hidden\" value=\"$mail\" name=\"mail\">
                  <input type=\"hidden\" value=\"$dept\" name=\"dept\">
                  <input type=\"hidden\" value=\"$sal\" name=\"sal\">
                  <input type=\"hidden\" value=\"$doj\" name=\"doj\">
                  <input type=\"hidden\" value=\"$dor\" name=\"dor\">
                  <input type=\"hidden\" value=\"$otp\" name=\"otp1\">
                                  <input type=\"submit\" value=\"Submit\" name=\"Submit\"></form>"; 
?>