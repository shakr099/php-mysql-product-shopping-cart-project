<?php
include "header.php";

include_once "conn.php";
$id=$_GET['id_u'];
$result=mysqli_query($con,"delete user from user where user_id=$id");
header("Location:users.php?name=$value")

?>   