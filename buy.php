<?php

    extract($_POST);
    $con=mysql_connect("localhost","root","") or die("Could not connect"); 
	mysql_select_db("my project");

    if($wigth>0&&$height>0&&$qty>=1)
    {
        session_start();
        if(isset($_SESSION['semail']))
        { 
            $wigth=(int)$wigth;
            $height=(int)$height;
            $mul=$wigth*$height;
            $rupye=$rname*$mul;

            $pavan=$_SESSION['semail'];

            $q="insert into order_data values('$pavan','','$pname','$height','$wigth','$mul','$qty','$rname','$rupye')";
            $r=mysql_query($q,$con);
            
            require("g.php");
        }
        else
        {
            header("location:login_page/login.php");
        }
    }
    else
    {
        
        echo "<script>alert('Please Enter Valid Value...');</script>";
       
    }

?>