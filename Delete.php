<?php
    require("Connection.php");
    $id=$_POST['id'];
    $sql = "DELETE FROM emp WHERE EmpID='$id'";
    $res=mysqli_query($conn, $sql);
    if($res){
        echo "Data with ID $id Deleted...<br>";
        echo "<a href=\"SignUp.php\">Press here go to home page</a>";
    }

    else
        echo "ID Doesn't Exists";
    $conn->close();
?>