<?php
	$hostname="localhost";
	$conn=mysqli_connect($hostname,"root","");
	echo "Connected to MySQL<br>";
	$db=mysqli_select_db($conn,"Signup");
	$query="DELETE from login where username='$_POST[uname]' and password='$_POST[pass]'";
	$result=mysqli_query($conn,$query);
	echo "record deleted";
	mysqli_close($conn);
?>