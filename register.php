<?php
require "connect.php";

$name = $_POST["namekey"];
$email = $_POST["emailkey"];
$mobile = $_POST["mobilekey"];
$password = $_POST["passwordkey"];

$insert = "insert into users values(null, '$name', '$email', '$mobile', '$password')";
$check=mysqli_query($connect, $insert);

if(!$check)
{
	echo "register not done".mysqli_error();
}
else
{
	echo "register done";
}

?>