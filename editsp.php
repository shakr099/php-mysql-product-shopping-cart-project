<?PHP
$id=$_GET['id_s'];
include("conn.php");
?>
<?php
include "header.php";

 


 
 $result=mysqli_query($con,"select * from t_special_need where id_special=$id");
 while($res=mysqli_fetch_array($result)){
 ?>
<div  align="center" >
<div  align="center"  style="width:200px;border:2px solid black"> 
 <form align="center"  method="post" action="" >
name of special need  <br>
 <input type="text" name="name" value='<?php echo $res['special_need'];  ?>' required>
  <hr>  <input type="hidden" name="id_s" value='<?php echo $res['id_special'];  ?>' required> 
   <input  type="submit" value="edit" name='edit'> 
 </form>
 </div>
 </div>


 <?php

}

?>


<?php
if(isset($_POST['edit'])){

    $ename=$_POST['name'];

    $idd=$_POST['id_s'];

$sq=mysqli_query($con,"UPDATE t_special_need SET special_need='$ename' where id_special=$idd ");
if($sq){
    echo "done";

header("Location:mangespecial_need.php?name=$value");
}
else{
    echo("error".mysqli_error());

 }
}?>