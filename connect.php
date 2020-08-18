<?php
$username = "searchke_onlinec";
$password = "searchke_onlinec";
$dbname = "andromeda";
$url = "192.168.1.5";

$connect = mysqli_connect($url, $username, $password, $dbname);

if(!$connect)
{
	echo "db not connect".mysqli_connect_error();
}
else{
	echo "db connect success";
}

?>