<?php

$a=$_REQUEST['a1'];
$b=$_REQUEST['a2'];
$c=$_REQUEST['a3'];
//$d=$_REQUEST['a4'];

$d=$_FILES['a4']['name'];
$tmp=$_FILES['a4']['tmp_name'];

move_uploaded_file($tmp,"upload/".$d);

//$con=mysqli_connect("localhost","root","","project");
require("db.php");
if($con)
{
	$q="insert into uploadproject values('$a','$b','$c','$d')";
	$res=mysqli_query($con,$q);
	if($res)
		echo "<script>alert('Inserted')</script>";
	else
		echo mysqli_error($con);
}
else
	echo mysqli_connect_error();
?>