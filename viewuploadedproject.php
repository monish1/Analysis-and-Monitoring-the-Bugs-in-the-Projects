
<!DOCTYPE html>
<html>
<head>
<style>
#tester {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tester  td, #tester th {
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

<h1 style="font-size:60px;">Uploaded Projects</h1>

<table id="tester" width="1000" border="2" cellpadding="20" cellspacing="20">
  <tr>
    <th>Project ID</th>
    <th>Project Name</th>
    <th>Where to Implement</th>
	<th>Filename</th>
	<th>Download</th>
  </tr>
  
  
  



<?php
require("db.php");
if($con)
{
	$q="select * from uploadproject";
	$res=mysqli_query($con,$q);
}
while($r=mysqli_fetch_assoc($res)){
$f=$r['File Name'];
echo "<tr>";

echo "<td>".$r['Project ID']."</td>";
echo "<td>".$r['Project Name']."</td>";
echo "<td>".$r['Where to Implement']."</td>";
echo "<td>".$r['File Name']."</td>";
echo "<td><a href='download.php?fa=$f'>Download</a></td>";
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