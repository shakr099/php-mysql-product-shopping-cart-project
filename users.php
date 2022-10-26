<?php
include "header.php";

?>

 <div align='center'>
    <h2>mange users </h2>
	<br>
	<table style='width:70%;' border='2'>
<tr align='center'>
<td>username</td>
<td>email</td>
<td>pass</td>
<td>cind</td>
<td></td>
	
	
<td></td>
</tr>
<?php
include_once "conn.php";

$result=mysqli_query($con,"select * from user  ORDER BY user_id DESC");
while($res=mysqli_fetch_array($result)){
echo "<tr class=data>";
echo "<td  align='center' class='scondary'>". $res['username']."</td>";
echo "<td  align='center' class='scondary'>". $res['email']."</td>";

echo "<td  align='center' class='scondary'>". $res['password']."</td>";

?>
<?php

echo "<td  align='center' class='scondary'>". $res['cind']."</td>";
?>
<td style="">
  <?php

$sel="select * from user where username='$value' and cind='admin'";
$s=mysqli_query($con,$sel) or die ("conn not exet");
$row_c=mysqli_num_rows($s);
if($row_c==1){




  ?>
  
<a href="edituser.php?id_u=<?php echo  $res['user_id']; ?>&&name=<?php echo $value; ?>">
<button  style="border-radius:50px; width:100%;">edit
</button></a></td><td style="">
    
<a href="deleteuser.php?id_u=<?php echo  $res['user_id'];?>&&name=<?php echo $value; ?>">
<button  style="border-radius:50px; width:100%;">delete
</button></a></td></tr><?php
}
 }
?>
</table>