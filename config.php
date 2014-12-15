<?php

$dbhost="localhost";

$dbusername="root";

$dbpassword="mysql";

$dbname="prafulla";



//Before you can perform any operation on a database you must connect to the MySQL server. The syntax for performing this operation is simple:

//$connect = mysqli_connect($dbhost, $dbusername, $dbpassword);

// mysqli_select_db($connect,$dbname) or die ("Could not select database");

$connect = mysql_connect($dbhost, $dbusername, $dbpassword);

mysql_select_db($dbname,$connect) or die ("Could not select database");

?>

