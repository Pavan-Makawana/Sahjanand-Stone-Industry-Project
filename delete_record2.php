<?php
    session_start();

    $con=mysql_connect("localhost","root","") or die("Could not connect"); 
	mysql_select_db("my project");

    
    $no2=$_SESSION['no2'];
   
    $q="DELETE FROM `order_data2` WHERE no=$no2";
    $qry=mysql_query($q,$con);
    if($qry)
    {
        header("location:add_card.php");
    }
?>