<html>
<head>
<title> Sign Up Page </title>
</head>

<body bgcolor="white">
	<form action="OTP_input.php" method="post">
		<br>
		<br>
	<center><table border= 25px><tr><td>
	<table bgcolor="white" >	
		<tr><td >Enter Your ID:</td> 			<td style="width:10px"><input class ="input" type="number" name="id" placeholder="Enter your ID" required><br></td></tr>

		<tr><td>Enter Your Name:</td>  		    <td><input class ="input" type="text" name="name" placeholder="Enter your Name" required><br></td></tr>
		
		<tr><td>Enter Your Gender:</td>		    <td><input type="radio" value="Male" name="gen" required>Male
							<input type="radio" value="Female" name="gen">Female
							<br></td></tr>
		<tr><td>Enter Your Mob:</td> 			<td><input class ="input" type="number" value="Mob" name="mob" placeholder="123-456-7890" required><br></td></tr>
		<tr><td>Enter Your Email:</td> 			<td><input class ="input" type="email" name="mail" placeholder="Example@gmail.com" required><br></td></tr>
		<tr><td>Enter Your DeptNo:</td> 		<td><input class ="input" type="number" name="dept" placeholder="10-20-30-40" required><br></td></tr>
		<tr><td>Enter Your Salary:</td> 		<td><input class ="input" type="number" name="sal" placeholder="0 - 100000" required><br></td></tr>
		<tr><td>Enter Your DOJ:</td>			<td><input class ="input" type="date" value="DOJ" name="doj" required><br></td></tr>
		<tr><td>Enter Your DOR:</td> 			<td><input class ="input" type="date" value="DOR" name="dor" required><br></td></tr>
		<tr><td colspan="2"> <center><input type="submit" value="submit" name="Submit" ></center></td></tr>
		</table></td></tr>	<tr bgcolor="white"><td>
	</form>	   

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		Enter Your ID: 			<input type="number" value="ID" name="id" placeholder="Enter your ID" required><br><br>
								<center><input type="submit" value="Delete" name="Submit">	
								<input type="submit" value="Display" name="Submit">
								<input type="submit" value="Update" name="Submit">
								<input type="submit" value="View" name="Submit" ></center>
	</form>
	<?php
    require("Display.php");
?>
</td></tr></table>
</center>
</body>
</html>

