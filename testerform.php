<?php

$a=$_REQUEST['a1'];
$b=$_REQUEST['a2'];
$c=$_REQUEST['a3'];
$d=$_REQUEST['a4'];
$e=$_REQUEST['a5'];
$f=$_REQUEST['a6'];
$g=$_REQUEST['a7'];
$h=$_REQUEST['a8'];
$i=$_REQUEST['a9'];


//$con=mysqli_connect("localhost","root","","project");
require("db.php");
if($con)
{
	$q="insert into testerform values('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
	$res=mysqli_query($con,$q);
	if($res)
		echo "<script>alert('Inserted')</script>";
	else
		echo mysqli_error($con);
}
else
	echo mysqli_connect_error();
?>