<?php
$value=isset($_GET['name'])? $_GET['name'] :"";
echo $value;
if($value==""){
      header("Location:login.php");

}
?>

<!DOCTYPE html> 

<html>
<head>
<title>join </title>
    <meta charset="utf-8">
</head>
<body >
   <div>
      <ul class="nav">
	   <li><a  href='index.php?name=<?php echo $value?>'  > home</a></li>
	    <li><a href='mangechild.php?name=<?php echo $value?>'>Childern</a></li>
	   <li> <a  href='mangespecial_need.php?name=<?php echo $value?>' > Special need </a> </li>
      <li><a href='mangechild_special.php ? name=<?php echo $value?>' >report chaild and special</a></li>
      
<?php
include_once "conn.php";

$sel="select * from user where username='$value' and cind='admin'";
$s=mysqli_query($con,$sel) or die ("conn not exet");
$row_c=mysqli_num_rows($s);
if($row_c==1){
?>
      <li><a href='users.php?name=<?php echo $value?>' >user</a></li>
<?php
}
      ?>
      <li> <a  href='logout.php'>  تسجيل الخروج  </a> </li>
</ul>

   </div>