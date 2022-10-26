<?php

include_once "conn.php";
if(isset($_POST['submit'])){
$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];

$insertt="INSERT INTO user (username,email,password ) VALUES ('$name','$email','$pass')";
if(mysqli_query($con,$insertt)){
	header("Location:login.php?msg=new reqrd has ben reqrd");
}else{
	header(string: "Location:singuph.php?msg=".mysqli_error($con));
}
}
else
{
	echo "pleas go registration";
}
mysqli_close();
?>