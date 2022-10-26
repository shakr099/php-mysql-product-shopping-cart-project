<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <title>log in</title>
       <meta charset="utf-8">
    </head>
    <body > 

<div align="center">
	 <div  style='margin-top:100px;'class="login-inputs">
                <h1>sing up</h1>
                <form  action="singup.php" method="POST">
<input type='text' name='name'  placeholder="user name " required><br>
 <input type='password' name='pass'   placeholder="password"  required><br>  
 <input type="email" name="email"  placeholder="email"  required><br>
<input type="reset" name="reset"   placeholder="reset"  required><br>
                    <button type="submit" name="submit">sing up </button>
                </form>
            </div>

            <div style='color:red'>
<?php
 $value=isset($_GET['msg'])? $_GET['msg'] :"";
echo $value;


?>

            </div>
	  </div> 
       <!-- <section  class="login-container">
           
        </section>-->		
    </body>
</html>