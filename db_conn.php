<?php  
// $server = "containers-us-west-29.railwayasdfasdf
 $sname = "containers-us-west-29.railway.app";
$uname = "root";
$password = "UAvnEkYU3gQMmleuntcS";
$db_name = "railway";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
