
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

<h1 style="font-size:60px;">View bug</h1>

<table id="tester" width="1000" border="2" cellpadding="20" cellspacing="20">
  <tr>
    <th>Project ID</th>
    <th>Type of Bug</th>
  </tr>
  
  
  



<?php
require("db.php");
if($con)
{
	$q="select * from addbug";
	$res=mysqli_query($con,$q);
}
while($r=mysqli_fetch_assoc($res)){
echo "<tr>";

echo "<td>".$r['Project ID']."</td>";
echo "<td>".$r['Type of Bug']."</td>";
echo "</tr>";

}
?>


</table>
<a href="coderhome.html" class="previous">&laquo; Back</a></td>
    <label>
  
    </label>
</center>
</body>
</html>