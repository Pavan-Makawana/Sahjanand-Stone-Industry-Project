<?php 
 
 if(isset($_POST['login']))
 {
	 $con=mysql_connect("localhost","root","") or die("Could not connect"); 
	 mysql_select_db("my project");
    extract($_POST);
            $s=" select email,password from register_data where email='$e' or password='$pa' ";
            $ex=mysql_query($s,$con);
            $da=mysql_num_rows($ex);

            if($da>0)
            {
                $ar=mysql_fetch_array($ex);
                if($e==$ar[0]&&$pa==$ar[1])
                {
                    session_start();
                    $_SESSION['semail']=$e;
                    echo  "<div class='success' style='color:black' id='connect-register'>
                            <div style='background-color:aqua; 
                                        box-shadow:0px 5px 45px black; 
                                        padding:5px 22px 5px 23px;'> 
                                            SHAJANAND STONE INDUSTRIES
                            </div> <br><br> 
                                Your login is successful.<br>
                                Now you can order,<br>
                                Welcome to 
                                <a id='ho' href='../home.html' '>Home Page</a>
                        </div>";
                    
                }
                else
                {
                    echo "<span id='connect-login-s'> Invalid User name or password </span>";
                }
            }
            else
            {
                echo  "<div class='success' style='color:black' id='connect-register'>
                            <div style='background-color:aqua; 
                                        box-shadow:0px 5px 45px black; 
                                        padding:5px 22px 5px 23px;'> 
                                            SHAJANAND STONE INDUSTRIES
                            </div> <br><br> 
                                Email is not found in database,<br>
                                Click to 
                                <a href='register.php' style='color:hwb(243 0% 0%)'>Register here</a>
                        </div>";
            }

	 mysql_close($con);
 }
 ?>

<?php $err=" ";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>

</head>
<body>
<?php echo " <div>$err</div>"; ?>
    <a href="../home.html"><img class="back-img" src="back1.png" alt=""></a>
    <div class="login-box">
        <h1>Login</h1>
        <form name="f1" action="login.php" id="lform" method="POST">
            <label>Email</label>
            <input type="email" name="e" required>
            <label>Password</label>
            <input type="password" name="pa" required>
                
            <input id="lsubmit" type="submit" value="Submit" name="login">
        </form>
            <p class="para-1">Not have an account? <a href="register.php" >Register Here</a></p>
    </div>
</body>
</html>