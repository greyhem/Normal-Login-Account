<?php
	$hostname="localhost";
	$conn=mysqli_connect($hostname,"root","");
	echo "Connected to MySQL<br>";
	$db=mysqli_select_db($conn,"Signup");
	$query="Update login set password='$_POST[newpass]' where username='$_POST[uname]' and password='$_POST[pass]'";
	$result=mysqli_query($conn,$query);
	echo "record updated";
	mysqli_close($conn);
?>