<?php  
// $server = "containers-us-west-29.railwayasdfasdf
//  $sname = "containers-us-west-29.railway.app";
// $uname = "root";
// $password = "UAvnEkYU3gQMmleuntcS";
// $db_name = "railway";

// $conn = mysqli_connect($sname, $uname, $password, $db_name);



$MYSQLDATABASE="railway";
$MYSQLHOST=    "containers-us-west-80.railway.app";
$MYSQLPASSWORD="IydtOL4J7OXSWWHwDfVT";
$MYSQLUSER=    "root";
$MYSQL_URL=    "mysql";
$conn = mysqli_connect($MYSQLDATABASE, $MYSQLHOST, $MYSQLPASSWORD,$MYSQLUSER,$MYSQL_URL);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
