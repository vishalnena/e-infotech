<?php
define('DB_USER', "root");
define('DB_PAASWORD', "");
define('DB_DATABASE', "e_learning");
define('DB_SERVER', "localhost");

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PAASWORD,DB_DATABASE);
if(mysqli_connect_errno())
{
	echo"Failed to connect to MySQL: ".mysqli_coonect_error();
}
else
{
	echo "connected";
}
?>