<?php
$id=$_GET['id_r'];
include"header.php";

include_once "conn.php";

?>
<div align='center' >
 <div   style="width:200px;border:2px solid black"> 
 <form align='center'   method="post" action="" >



<?php


$result=mysqli_query($con,"select * from child_special where  id=$id ");
while($row=mysqli_fetch_array($result)){
?>

<hr>children  <hr>

<select   name="child">
    
<?php
$resu=mysqli_query($con,"select * from children  where id_child=$row[id_child] ");
while($ro=mysqli_fetch_array($resu)){?>

?>


<option value='<?php echo $ro['id_child'];?> ' ><?php echo $ro['fname']. "|".$ro['lname'];?> </option>



<?php
}
$rsu=mysqli_query($con,"select * from children");
while($roo=mysqli_fetch_array($rsu)){?>

    <option value="<?php echo $roo['id_child'];?>" >   <?php echo $roo['fname']. "|".$roo['lname'];?> </option>
<?php
}

?>

</select>

<hr>Special need <hr>
 <select   name="special">

<?php

$res=mysqli_query($con,"select * from t_special_need   where id_special=$row[id_special]");
while($r=mysqli_fetch_array($res)){ ?>

<option    value='<?php echo $r['id_special'];?>><?php echo $r['special_need'];?> </option>
<?php
}?>
  <?php
 $result=mysqli_query($con,"select * from  t_special_need");
while($roww=mysqli_fetch_array($result)){
	 ?>
 <option value='<?php echo $roww['id_special'];?> ' ><?php echo $roww['special_need'];?> </option>
 <?php }?>




</select>
<hr> Date <hr>

<input type='date'  name='date' value="<?php echo  $row['date']?>"/>
<hr> description <hr>

<textarea type='text' name="des" name="date" ><?php echo  $row['description']; ?></textarea>
<input type='hidden' name='idd' value="<?php echo  $row['id']?>"/>

<?php
}

?>
   <input name="edit" type="submit" value="edit"> 
 </form>
 </div>

</div>
 


 <?PHP
include_once "conn.php";

 if(isset($_POST["edit"])){
$child=$_POST['child'];
$special=$_POST['special'];
$date=$_POST['date'];
$des=$_POST['des'];
$idd=$_POST['id'];
$sql=mysqli_query($con,"update  child_special set id_child='$child', id_special='$special',date='$date',description='$des' where id='$id' ");
if($sql){    
echo "done";
	header("Location:mangechild_special.php?name=$value");
}
else{
		echo ("error".mysqli_error());
 }
}
 ?>