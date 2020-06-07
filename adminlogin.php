<?php
 
  $a = '$_POST[a1]';
  $b = '$_POST[a2]';
  //$usr == $username && $psw == $password
  if ($_POST['a1']=="admin" && $_POST['a2']=="admin") {
  header("location:adminloggedin.html"); }
    else 
	{
      echo "Incorrect Admin Name or Password";
    }
    ?>