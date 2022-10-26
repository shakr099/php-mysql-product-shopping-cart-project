
<?PHP
include "header.php";

if(isset($_POST["save"])){
  include_once "conn.php";


$name=$_POST['name'];
$sql=mysqli_query($con,"INSERT INTO t_special_need (special_need) VALUES('$name')");
if($sql){    

echo "done";
	header("Location:mangespecial_need.php?name=$value");
}
else
		echo("error".mysqli_error());
 }
 ?>

<?php

?>

<div align='center'>
<h1>mange special need</h1>
<div   style="width:200px;border:2px solid black"> 
 <form align='center'  align="center"  method="post" action="" >
name of special need  <br>
 <input type="text" name="name" required>
  <hr>   <hr>

 <hr>
  <br>
   <input name="save" type="submit" value="add" name='add'> 
 </form>
 </div>
   <br>   <br> 


   <?php
	?>

	<table  border='2' width='40%'>
<tr align='center' class='active'>
<td>special need</td>

<td></td>
</tr>
<?php




include_once "conn.php";

$result=mysqli_query($con,"select * from t_special_need   ORDER BY id_special DESC");
while($res=mysqli_fetch_array($result)){
echo "<tr class=data>";

echo "<td  align='center' class='scondary'>". $res['special_need']."</td>";


?>
<td >

<?php

$sel="select * from user where username='$value' and cind='admin'";
$s=mysqli_query($con,$sel) or die ("conn not exet");
$row_c=mysqli_num_rows($s);
if($row_c==1){



?>
<a href="editsp.php?id_s=<?php echo  $res['id_special']; ?>&&name=<?php echo $value; ?>">
<button >
edit
</button></a></td><td style="">

<a href="deletesp.php?id_s=<?php echo $res['id_special']; ?>&&name=<?php echo $value; ?>">
<button  >
delete
</button></a></td></tr><?php }
}
?>


</table>
 <h1></h1>
</div>
  </body>
 </html>
