<?php
//connect to mysql
$db = mysql_connect("192.168.100.52","root","123") or die("Error".mysql_error());
//select databse
mysql_select_db("mycollege",$db);

?>