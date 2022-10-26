<?php
include "header.php";

include_once "conn.php";
$id=$_GET['id_r'];
$result=mysqli_query($con,"delete child_special from child_special where id=$id");
header("Location:mangechild_special.php?name=$value")

?>   
