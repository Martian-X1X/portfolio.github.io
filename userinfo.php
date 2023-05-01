<?php

$con = mysqli_connect('localhost','root','',);

if($con)
{
	echo "connection sucessfull";
}
	else
	 {
		echo "No connection";
	}

mysqli_select_db($con,'mydata');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$query = " insert into tableinfo (name, email, mobile, address) values ('$name','$email','$mobile','$address')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');


?>