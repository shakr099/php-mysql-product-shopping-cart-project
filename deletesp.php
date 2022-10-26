<?php
include "header.php";
include_once "conn.php";
$id=$_GET['id_s'];
$result=mysqli_query($con,"delete t_special_need from t_special_need where id_special='$id'");
header("Location:mangespecial_need.php?name=$value")

?>