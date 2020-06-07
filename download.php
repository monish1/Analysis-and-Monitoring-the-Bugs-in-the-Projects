<?php
$fname= $_REQUEST['fa'];
header("Content-disposition:attachment;filename=$fname");
readfile("upload\\$fname");
?>