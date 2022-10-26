<?PHP
$id=$_GET['id_u'];
include("conn.php");
?>
<?php
include "header.php";

 


 ?>

<div  align='center' >
<div  align='center'  style="width:200px;border:2px solid black"> 


<form  action="" method="POST">
<?php

 
$resu=mysqli_query($con,"select * from user where user_id=$id");
while($row=mysqli_fetch_array($resu)){

?>
<lable>user name</lable>
<input type='text' name='name'  placeholder="user name "  value="<?php echo $row['username'];   ?>" required><br>
<lable>password</lable>
 
<input type='text' name='pass'   placeholder="password" value="<?php echo $row['password'];   ?>" required><br>  
<lable>user email</lable>
 
<input type="email" name="email"  placeholder="email"  value="<?php echo $row['email'];   ?>"  required><br>
<lable>user cind </lable>
 
<select  name='gav'>
 <option  ></option>

 <option value='' >delete this form admin</option>

<option value='admin' >gave this admin </option>

 </select>
 <?php
}
 ?>

 <hr/>
                    <button type="submit" name="edit">edit </button>

                </form>
</div>
                </div>
                <?php
 
if(isset($_POST['edit'])){
$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$cin=$_POST['gav'];

$update="update  user set username='$name',email='$email',password='$pass' , cind='$cin' where user_id='$id' ";
if(mysqli_query($con,$update)){
header("Location:users.php?name=$value");
}

}
?>