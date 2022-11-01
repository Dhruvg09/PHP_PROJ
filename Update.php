<?php
    require("Connection.php");
    $id=$_POST['id'];
    $name=$_POST['name'];
    $gen=$_POST['gen'];
    $mob=$_POST['mob'];
    $mail=$_POST['mail'];
    $dept=$_POST['dept'];
    $sal=$_POST['sal'];
    $doj=$_POST['doj'];
    $dor=$_POST['dor'];

    $sql="UPDATE emp SET EmpName='$name', Gender='$gen', Mob='$mob', Email='$mail', Dept='$dept', Salary='$sal', DOJ='$doj', DOR='$dor'
                WHERE EmpID='$id';";
    $res= mysqli_query($conn,$sql);
    if($res)
    {
        echo"Data Updated...";
        echo "<form action=\"Display.php\" method=\"post\">
        <input type=\"hidden\" value=\"$id\" name=\"id\">
        <input type=\"submit\" value=\"View Data\" name=\"Submit\">
        </form>";
    }
    else
        echo"Id not found.";
?>