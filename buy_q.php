<?php

       
    if($qty>=1)
    {
        session_start();
        if(isset($_SESSION['semail']))
        { 
            $pavan=$_SESSION['semail'];
            $rupye=$rname*$qty;
            $q="insert into order_data2 values('$pavan','','$pname','$qty','$rname','$rupye')";
            $r=mysql_query($q,$con);

            require("sw.php");
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