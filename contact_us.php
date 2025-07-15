<?php 
    
     session_start();   
    if(isset($_POST['submit']))
    {
        $con=mysql_connect("localhost","root","") or die("Could not connect"); 
        mysql_select_db("my project");
        extract($_POST);
        
        if(isset($_SESSION['semail']))
        {   
            $eee=" ";
            $eee=$_SESSION['semail'];
            $q="select full_name from register_data where email='$eee'";
            $ss=mysql_query($q,$con);
            $data=mysql_fetch_array($ss);
        if($fname==$data[0])
        {
            if($email==$_SESSION['semail'])
            {
                $q="insert into contact_us_data values('','$fname','$email','$discription')";
	            $r=mysql_query($q,$con);
                echo "<span id='connect-login-s'> Your submit is successful...</span>";
            }
            else
            {
                echo "<span id='connect-login-f'> Dose not match email in database.</span>";
            }
        }
        else
        {
            echo "<span id='connect-login-f'> Dose not match full name in database.</span>";
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
            Your must login first,<br>
            Click to 
            <a href='login_page/login.php' style='color:hwb(243 0% 0%)'>Login here</a>
    </div>";
    }
	 mysql_close($con);
 }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="contact_us.css">
    <title>Contact Us</title>
</head>
<body>
    <?php require('navbar.php'); ?>
    <div class="contact-img">
        <img src="my_project_ppt/stonlogo.jpg" >
        <div class="login-box">
            <h1>Contact Us</h1>
            <form name="f1" action="contact_us.php" id="lform" method="POST">
                <label>Full Name</label>
                <input type="text" name="fname" required>
                <label>Email</label>
                <input type="email" name="email" required>
                <label>Discription</label>
                <textarea name="discription" id="textarea" rows="5" value=" Discription" required></textarea>

                <input id="lsubmit" type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>
</body>
</html> 