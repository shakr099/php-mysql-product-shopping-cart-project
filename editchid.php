<?PHP
$id=$_GET['id'];
include("conn.php");
?>
<?php
include_once "conn.php";
$result=mysqli_query($con,"select * from children where id_child=$id");
 while($row=mysqli_fetch_array($result)){
 ?>
 <div  align='center'>
<div  align='center' style="width:200px;border:2px solid black"> 
 <form align='center'  method="post" enctype="multipart/form-data"  action="" >
 <h1>Edit child informatin </h1>
ftp_rename 
 <input type="text" name="fname"   value="<?php echo $row['fname']; ?>" required>
  <hr>lname  
 <input type="text" name="lname"  value="<?php echo $row['lname']; ?>" required>
  <hr>photo of report 
 <img   style='width:60%; margin-top:4px;border-radius:50px; height:50px;' src="image/<?php echo $row['report']?> "/>

 <input type="file" value="<?php echo $row['report']?>" name="photorep" required>

  <hR> birthdate  
  <input type="text"   value="<?php echo $row['birthdate']; ?>" name="berthdate"/ required>
  <hr> email 
 <input type="email" name="email" value="<?php echo $row['email']; ?>" required/>

 <hr>  number phone 
 <input type="text" name="numphone" value="<?php echo $row['phone']; ?>" required/>
 <hr> address  
 <input type="text" name="address" value="<?php echo $row['address']; ?>" required/>
<input type='hidden' name='id'  value="<?php echo $row['id_child'];?>" required/>
<hr>
 <input  type="submit" name="edit" style='' value="Edit" > 
 <hr>
 </form>
 
 </div>
 </div>
 
 <?php

}

?>















<?php

include_once "conn.php";

	
    if(isset($_POST["edit"])){
   $target="image/";
   $target=$target.basename($_FILES['photorep']['name']);
   $pic=($_FILES['photorep']['name']);
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $idd=$_POST['id'];
   $berthdate=$_POST['berthdate'];
   $email=$_POST['email'];
   $numphone=$_POST['numphone'];
   $address=$_POST['address'];



$sql=mysqli_query($con,"UPDATE children  set fname='$fname',lname='$lname',birthdate='$berthdate',report='$pic',email='$email',phone='$numphone',address='$address'  where id_child=$idd"); 
   if(move_uploaded_file($_FILES['photorep']['tmp_name'],$target)&& $sql ){
   header("Location:mangechild.php ? name=$value");
   }
   
   else{
               echo("error".mysqli_error());
       
    }

    }

?>