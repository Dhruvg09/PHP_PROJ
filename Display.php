<?php
    require("Connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sub=$_POST['Submit'];
    if($sub=="View")
    {
        $sql = "SELECT * from dhruv.emp order by EmpID;";
    }
    else
    {
    $id=$_POST['id'];
    $sql = "SELECT * from dhruv.emp WHERE EmpID=$id;";
    }
    $res=mysqli_query($conn, $sql);
    if($sub=="View Data")
        echo "<br><a href=\"SignUp.php\">Press here go to home page</a>";

    if($res->num_rows > 0)
    {
        if($sub=="Display" || $sub=="Delete" || $sub=="View Data" || $sub=="View"){
        echo "<table border=1><tr><th>ID</th> <th>Name</th> <th>Gender</th>
              <th>Mob</th><th>Email</th><th>Dept</th><th>Salary</th>
              <th>DOJ</th><th>DOR</th></tr>";
            while($row = $res->fetch_assoc()) {
                  echo "<tr>
                        <td>".$row["EmpID"]."</td>
                        <td>".$row["EmpName"]."</td>
                        <td>".$row["Gender"]."</td>
                        <td>".$row["Mob"]."</td>
                        <td>".$row["Email"]."</td>
                        <td>".$row["Dept"]."</td>
                        <td>".$row["Salary"]."</td>
                        <td>".$row["DOJ"]."</td>
                        <td>".$row["DOR"]."</td>
                        </tr>";
            }       
        echo "</table>";
    }
        if($sub=="Delete"){
        echo "<form action=\"Delete.php\" method=\"post\"><br>";
		echo "Are you sure you want to delete this: <input type=\"hidden\" value=\"$id\" name=\"id\">";
	    echo "<input type=\"submit\" value=\"Yes\" name=\"delete\">";
        echo "</form>";
        }
        else if($sub=="Update")
        {
            while($row = $res->fetch_assoc()) 
            {
                echo"<table>";
                echo "<form action=\"Update.php\" method=\"post\"> 
                    <tr><td>Your ID:</td> <td>" .$row["EmpID"]. "<input  type=\"hidden\" value=".$row["EmpID"]." name=\"id\"><br></td></tr>
                    <tr><td>Emp Name:</td> <td> <input  type=\"text\" value=".$row["EmpName"]." name=\"name\"><br></td></tr>";

                        if($row["Gender"]=="Male"){
                echo"    <tr><td>Gender:</td> <td> <input  type=\"radio\" value=".$row["Gender"]." name=\"gen\" checked>Male
					<input  type=\"radio\" value=".$row["Gender"]." name=\"gen\">Female<br></td></tr>";
                }

                if($row["Gender"]=="Female"){
                    echo"    <tr><td>Gender:</td> <td> <input  type=\"radio\" value=".$row["Gender"]." name=\"gen\" >Male
                        <input  type=\"radio\" value=".$row["Gender"]." name=\"gen\" checked>Female<br></td></tr>";
                    }

                   echo" <tr><td>Mob No:</td> <td> <input  type=\"number\" value=".$row["Mob"]." name=\"mob\"><br></td></tr>
                    <tr><td>Email:</td> <td> <input  type=\"email\" value=".$row["Email"]." name=\"mail\"><br></td></tr>
                    <tr><td>Dept No:</td> <td> <input  type=\"number\" value=".$row["Dept"]." name=\"dept\"><br></td></tr>
                    <tr><td>Salary:</td> <td> <input  type=\"number\" value=".$row["Salary"]." name=\"sal\"><br></td></tr>
                    <tr><td>DOJ:</td> <td> <input  type=\"date\" value=".$row["DOJ"]." name=\"doj\"><br></td></tr>
                    <tr><td>DOR:</td> <td> <input  type=\"date\" value=".$row["DOR"]." name=\"dor\"><br></td></tr>
                    <tr><td colspan=\"2\"> <center><input type=\"submit\" value=\"submit\" name=\"Submit\"></center></td></tr>
                
	            </form>
                </table>";
            }
        }
    }
    else {
        $conn->close();
        die("ID Doesn't Exists");
    }
}
?>