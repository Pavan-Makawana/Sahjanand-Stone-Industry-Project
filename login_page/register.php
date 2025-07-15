<?php 
 session_start();
 if(isset($_POST['register']))
 {
	 extract($_POST);
	 $con=mysql_connect("localhost","root","") or die("Could not connect"); 
	 mysql_select_db("my project");
     $m="[0-9]{10}";
     if(@ereg($m,$mobail))
     {
        if($password==$cpassword)
        {
            $s="select email,password from register_data where email='$email'";
            $z=mysql_query($s,$con);
            $data=mysql_fetch_array($z);
            if($data[0]==$email&&$data[1]==$password)
            {
                echo  "<div class='success' style='color:black' id='connect-register'>
                            <div style='background-color:aqua; 
                                        box-shadow:0px 5px 45px black; 
                                        padding:5px 22px 5px 23px;'> 
                                            SHAJANAND STONE INDUSTRIES
                            </div> <br><br> 
                                You have to already register,<br>
                                Click to 
                                <a href='l  ogin.php' style='color:hwb(243 0% 0%)'>Login here</a>
                        </div>";
            }
            else
            {
                $q="insert into register_data values('','$fullname','$email','$password','$mobail')";
	            $r=mysql_query($q,$con);
	            if($r)
                {
                    echo  "<div class='success' style='color:black' id='connect-register'>
                            <div style='background-color:aqua; 
                                        box-shadow:0px 5px 45px black; 
                                        padding:5px 22px 5px 23px;'> 
                                            SHAJANAND STONE INDUSTRIES
                            </div> <br><br> 
                                Your Account is create,,<br>
                                Click to 
                                <a href='login.php' style='color:hwb(243 0% 0%)'>Login here</a>
                        </div>";
                }
            }
        }
        else
        {
            echo "<span id='connect-register-s'> Do not match with confirm password </span>";
        }
     }
     else
     {
        echo "<span id='connect-register'> Your mobail number is invalid </span>";
     }
        mysql_close($con);
 }    
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    

    <title>Document</title>
</head>
<body>
    <a href="../home.html"><img class="back-img" src="back1.png" id="back-button" alt=""></a>
     <link rel="stylesheet" href="color.css">
    <div class="register-box">
        <h1>Register</h1>
        <h4>it's free and only takes a minute</h4>
        <form action="register.php"id="sform" method="POST" name='f1'>
            <label>Full Name</label>
            <input type="text" name="fullname" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <label>Confirm Password</label>
            <input type="password" name="cpassword" required>
            <label>Mobail No</label>
            <input type="text" name="mobail" required>
            <input type="submit" id="ssubmit" value="Submit" name="register" >
        </form>
    </div>
        <p class="para-2">You have to alredy register?<a href="login.php" class="para-2">  Login here</a></p>
</body>
</html>


