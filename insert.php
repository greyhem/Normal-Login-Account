<?php
	$hostname="localhost";
	$uname = " ";
	$pass = " ";
	$conn=mysqli_connect($hostname,"root","");
	echo "Connected to MySQL<br>";
	$db=mysqli_select_db($conn,"Signup");
	$query="INSERT into login values('$_POST[uname]','$_POST[pass]')";
	$result=mysqli_query($conn,$query);
	echo "record inserted";
	mysqli_close($conn);
?>