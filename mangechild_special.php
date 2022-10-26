<?php
include"header.php";
include_once "conn.php";
?>
 <div align='center'>
 <h1>mange special need with child info</h1>
 <div   style="width:200px;border:2px solid black"> 
 <form align='center'  method="post" action="" >
  <hr>children  <hr>
  <select   name="child">
  <?php
 $result=mysqli_query($con,"select * from children ");
while($row=mysqli_fetch_array($result)){
	 ?>
 <option value='<?php echo $row['id_child'];?> ' ><?php echo $row['fname']. "|".$row['lname'];?> </option>
<?php } ?>
 </select>

 <hr>special need <hr>
 <select   name="special">
  <?php
 $result=mysqli_query($con,"select * from  t_special_need");
while($row=mysqli_fetch_array($result)){
	 ?>
 <option value='<?php echo $row['id_special'];?> ' ><?php echo $row['special_need'];?> </option>
 <?php }?>
 </select>
 <hr>
 <hr> date<hr>
 <input type="date" name="date" required>
 <hr> description <hr>
 <textarea type="text" name="des" required>
</textarea>
  <br>

   <input name="save" type="submit" value="add"> 
 </form>
 </div>
   <br>   <br> 

	<br><br>
	<br><br>
	<table border='2' >
<tr align='center' class='active'>
<td>children name</td>

<td>special need</td>
<td>date</td>

<td>description</td>

<td></td>
<td></td>
</tr>
<?php


$result=mysqli_query($con,"select * from child_special   ORDER BY id DESC");
while($row=mysqli_fetch_array($result)){
echo "<tr >";


$resu=mysqli_query($con,"select * from children  where id_child=$row[id_child] ");
while($ro=mysqli_fetch_array($resu)){

echo "<td  align='center' >".$ro['fname']." | ".$ro['lname']."</td>";

}
$res=mysqli_query($con,"select * from t_special_need   where id_special=$row[id_special]");
while($r=mysqli_fetch_array($res)){

echo "<td  align='center' >".$r['special_need']."</td>";

}
echo "<td  align='center' >". $row['date']."</td>";
echo "<td  align='center' >". $row['description']."</td>";


?>
<td >


<?php

$sel="select * from user where username='$value' and cind='admin'";
$s=mysqli_query($con,$sel) or die ("conn not exet");
$row_c=mysqli_num_rows($s);
if($row_c==1){



?>
<a href="editchild_speci.php?id_r=<?php echo  $row['id']; ?>&&name=<?php echo $value; ?>">
<button >
edit
</button></a></td><td >

<a href="deletchild_speci.php?id_r=<?php echo  $row['id']; ?>&&name=<?php echo $value; ?>">
<button  >delete
</button></a></td></tr><?php }
}
?>
















</table>
</div>


  </body>
 </html>






























<?PHP
 if(isset($_POST["save"])){
include("conn.php");



$child=$_POST['child'];
$special=$_POST['special'];
$date=$_POST['date'];

$des=$_POST['des'];
$sql=mysqli_query($con,"INSERT INTO child_special (id_child,id_special,date,description) VALUES('$child','$special','$date','$des')");
if($sql){    
echo "done";
	header("Location:mangechild_special.php?name=$value");
}
else{
		echo("error".mysqli_error());
 }
}
 ?>
 <h1  align='center'><a style="" href="index.php"><span class="glyphicon glyphicon-chevron-right"></span></a> </h1>
