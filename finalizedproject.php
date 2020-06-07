<?php

$a=$_REQUEST['a1'];
$b=$_REQUEST['a2'];
$c=$_REQUEST['a3'];




//$con=mysqli_connect("localhost","root","","project");
require("db.php");
if($con)
{
	$q="insert into finalizedproject values('$a','$b','$c')";
	$res=mysqli_query($con,$q);
	if($res)
		echo "<script>alert('Inserted')</script>";
	else
		echo mysqli_error($con);
}
else
	echo mysqli_connect_error();
?>