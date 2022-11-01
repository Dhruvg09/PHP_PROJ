<?php
    require("Connection.php");

      $id=$_POST['id'];
      $sql = "SELECT * from dhruv.emp WHERE EmpID=$id;";
      $res=mysqli_query($conn, $sql);
    if($res->num_rows > 0)
    {
      echo"ID already exists please enter a different ID <br>";
      echo "<a href=\"SignUp.php\">Press here go to home page</a>";
    }
    else
    {
      $id=$_POST['id'];
      $name=$_POST['name'];
      $gen=$_POST['gen'];
      $mob=$_POST['mob'];
      $mail=$_POST['mail'];
      $dept=$_POST['dept'];
      $sal=$_POST['sal'];
      $doj=$_POST['doj'];
      $dor=$_POST['dor'];
      $otp=$_POST['otp1'];
        if($otp==$_POST['otp'])
        {
                  $sql="INSERT INTO dhruv.emp (EmpID, EmpName, Gender, Mob, Email, Dept, Salary, DOJ, DOR)
                        VALUES ($id,'$name','$gen','$mob','$mail',$dept,$sal,'$doj','$dor');";
             if (mysqli_query($conn, $sql)){
                  echo "New record created successfully";
                  echo "<br><a href=\"SignUp.php\">Press here go to home page</a>";
             }
             else
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        else
              echo"OTP Doesn't match";
      }    
    $conn->close();
?>