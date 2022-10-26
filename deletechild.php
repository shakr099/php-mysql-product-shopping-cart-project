<?php
include "header.php";

include_once "conn.php";
$id=$_GET['id'];
$result=mysqli_query($con,"delete children from children where id_child=$id");
header("Location:mangechild.php?name=$value")

?>   