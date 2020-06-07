<?php

$a=$_REQUEST['a1'];
$e=$_REQUEST['a5'];



//$con=mysqli_connect("localhost","root","","project");
require("db.php");
if($con)
{
	$q="select * from testerform where ID='$a' and Password='$e'";
	$res=mysqli_query($con,$q);
	if($r=mysqli_fetch_assoc($res))
		header("location:testerhome.html");
	else
		echo "Tester ID or Password incorrect";
}
else
	echo mysqli_connect_error();
?>