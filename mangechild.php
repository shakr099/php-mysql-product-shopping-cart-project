
<?php
include "header.php";
?>

<?php

include_once "conn.php";
    if(isset($_POST["save"])){
   $target="image/";
   $target=$target.basename($_FILES['photorep']['name']);
   $pic=($_FILES['photorep']['name']);
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $berthdate=$_POST['berthdate'];
   $email=$_POST['email'];
   $numphone=$_POST['numphone'];
   $address=$_POST['address'];
   
   $sql=mysqli_query($con,"INSERT INTO children(fname,lname,birthdate,report,email,phone,address) VALUES('$fname','$lname','$berthdate','$pic','$email','$numphone','$address')");
   if(move_uploaded_file($_FILES['photorep']['tmp_name'],$target)&& $sql ){
   header("Location:mangechild.php ? name=$value");
   }
   
   else{
               echo("error".mysqli_error());
       
    }
       
    } 
    
       
       
       
   ?>
   
   

 <div align='center'>
 <h1>mange info children</h1>

<div   style="width:200px;border:2px solid black"> 
 <form  method="post" enctype="multipart/form-data"  action="">
 <div class="input-group">
ftp_rename <hr>
 <input type="text" name="fname" required>
 <hr> lname  <hr>
 <input type="text" name="lname" required>


 <hr> photo of report  <hr>
  <input type="file" name="photorep">
  <hr>

  <hr> birthdate  <hr>
  <input type="date" name="berthdate">
  <hr>

  <hr> email  <hr>
 <input type="email" name="email" required>

 <hr>  number phone  <hr>
 <input type="text" name="numphone" required>
 <hr> address  <hr>
 <input type="text" name="address" required>

 <input  type="submit"  name="save" value="add" > 
 <hr>
 </div>
 </form>
 
 </div>
 
	<table style='width:70%;' border='2'>
<tr align='center'>
<td>fname</td>
<td>lname</td>
<td>birthdate</td>
<td>report</td>
<td>email</td>
<td>phone</td>
<td>address</td>
	
	
<td></td>
</tr>
<?php


include("conn.php");

$result=mysqli_query($con,"select * from children  ORDER BY id_child DESC");
while($res=mysqli_fetch_array($result)){
echo "<tr class=data>";
echo "<td  align='center' class='scondary'>". $res['fname']."</td>";
echo "<td  align='center' class='scondary'>". $res['lname']."</td>";
echo "<td  align='center' class='scondary'>". $res['birthdate']."</td>";
?>
<td  align='center' class='scondary'><img  style='width:60%; height:80px;' src="image/<?php echo $res['report'];?>"/ ></td>
<?php

echo "<td  align='center' class='scondary'>". $res['email']."</td>";

echo "<td  align='center' class='scondary'>". $res['phone']."</td>";
echo "<td  align='center' class='scondary'>". $res['address']."</td>";


?>
<td style="">
  <?php
$sel="select * from user where username='$value' and cind='admin'";
$s=mysqli_query($con,$sel) or die ("conn not exet");
$row_c=mysqli_num_rows($s);
if($row_c==1){
?>
<a href="editchid.php?id=<?php echo  $res['id_child'];?>&&name=<?php echo $value; ?>">

<button  style="border-radius:50px; width:100%;">
edit
</button></a></td><td style="">
<a href="deletechild.php ? id=<?php echo  $res['id_child']; ?> && name=<?php echo $value;?>">
<button  style="border-radius:50px; width:100%;">
delete
</button></a></td></tr><?php
}
 }
?>
</table>
</div> 
</body>
 </html>
 