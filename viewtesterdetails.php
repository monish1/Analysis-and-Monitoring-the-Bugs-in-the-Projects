
<!DOCTYPE html>
<html>
<head>
<style>
#tester {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tester  td, #coder th {
    border: 1px solid #ddd;
    padding: 8px;
}

#tester tr:nth-child(even){background-color: #f2f2f2;}

#tester tr:hover {background-color: #ddd;}

#tester th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
<center>

<h1 style="font-size:60px;">Tester Details</h1>

<table id="tester" width="1000" border="2" cellpadding="20" cellspacing="20">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Gender</th>
	<th>E-mail</th>
	<th>Password</th>
	<th>Contact</th>
	<th>Date of Birth</th>
	<th>Age</th>
	<th>Country</th>
  </tr>
  
  
  



<?php
require("db.php");
if($con)
{
	$q="select * from testerform";
	$res=mysqli_query($con,$q);
}
while($r=mysqli_fetch_assoc($res)){
echo "<tr>";
echo "<td>".$r['ID']."</td>";
echo "<td>".$r['Name']."</td>";
echo "<td>".$r['Gender']."</td>";
echo "<td>".$r['E-mail']."</td>";
echo "<td>".$r['Password']."</td>";
echo "<td>".$r['Contact']."</td>";
echo "<td>".$r['Date of Birth']."</td>";
echo "<td>".$r['Age']."</td>";
echo "<td>".$r['Country']."</td>";
echo "</tr>";

}
?>


</table>
<a href="testerhome.html" class="previous">&laquo; Back</a></td>
    <label>
  
    </label>
</center>
</body>
</html>