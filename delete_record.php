<?php
    session_start();

    $con=mysql_connect("localhost","root","") or die("Could not connect"); 
	mysql_select_db("my project");

    
    $no=$_SESSION['no'];
    echo $no;
    $q="DELETE FROM `order_data` WHERE no=$no";
    $qry=mysql_query($q,$con);
    if($qry)
    {
        header("location:add_card.php");
    }
?>