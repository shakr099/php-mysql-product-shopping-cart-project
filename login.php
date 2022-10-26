<?php
include_once "conn.php";
if(isset($_POST['submit'])){

$name=$_POST['name'];
$pass=$_POST['pass'];
$err_mess="";
$sel="select * from user where username='$name' and password='$pass'";
$s=mysqli_query($con,$sel) or die ("conn not exet".mysqli_error($con));
$row_c=mysqli_num_rows($s);
if($row_c==1){
header("Location:index.php? name=$_POST[name]");
}else{
$err_mess="invaled uname or pass";
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <title>log in</title>
       <meta charset="utf-8">
     
    </head>
    <body dir='rtl'> 

<div >
	 <div align='center' >
                <h1>Log in</h1>
                <form  action="<?php echo $_SERVER["PHP_SELF"];   ?>" method="POST">
                    <input type="text" name="name" placeholder="user name" required><br><br>
                    <input type="password" name="pass" placeholder="password" required><br><br>
                    <div style='color:red'>
<?php
 if(isset($err_mess))
echo $err_mess;
?>

            </div>
            <button type="submit" name="submit">Log in </button>
            <button><a href='singuph.php'>sing up</a></button>
                </form>
       
            </div>
	  </div> 
      </body>
</html>