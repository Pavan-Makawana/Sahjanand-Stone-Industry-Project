<?php
    echo"<style>
                body{
                    table-layout:auto;
                    width:1700px;
                }

                #pditails{
                    position:relative;
                    top:50px;
                    margin: 50px;
                    padding: 10px;
                    border-bottom: 4px solid ;
                    font: 60px bolder;
                    font-weight: 700;
                    border-radius: 9%;
                }
                tr,th,td{
                    padding: 10px 10px 10px 10px;
                }

                .table{
                    margin:0 20px 0 20px;
                    display:inline-block;
                    padding: 5px 5px 5px 5px;
                    margin-top:50px;
                }
                
                #fix{
                    table-layout:fixed;
                     width:250px;
                }

                #fix2{
                    table-layout:fixed;
                     width:50px;
                }

                #fix3{
                    table-layout:fixed;
                     width:350px;
                }

                .add_center{
                    text-align:center;
                }

                #connect-register{
                    position: absolute;
                    font-weight: 700;
                    top:96%;
                    left: 40%;
                    color:red;
                    font-size:20px;
                }
                        .success{
                            background-color: rgb(255, 255, 255);
                            height: 27vh;
                            width: 30vw;
                            margin-top: -28%;
                            margin-left: -5.1%;
                            border-radius: 10px;
                            color: black;
                            filter: drop-shadow(-7px -7px 100px );
                            text-align: center;
                            z-index: 2;
                        }
                
                </style>";

    $con=mysql_connect("localhost","root","") or die("Could not connect"); 
	mysql_select_db("my project");

session_start();
if(isset($_SESSION['semail']))
{ 
    require("navbar.php");
    echo"<center><h1 id='pditails'>Order Data</h1></center>";
    $pavan=$_SESSION['semail'];
    $s="select * from order_data where uemail='$pavan'";
    
    $qry=mysql_query($s,$con);
    $table1=mysql_num_rows($qry);
    
    $s="select * from order_data2 where uemail='$pavan'";
    $r=mysql_query($s,$con);
    $table2=mysql_num_rows($r);

    if($table1>0)
    {
    echo "<table id='add1' border=3 cellpadding=10 class='table'>";
    echo "<tr>
                <th> No
                <th id='fix'> Product Name
                <th > Height
                <th> Wigth
                <th id='fix2'> Square Feet
                <th> Quantity
                <th> Price
                <th> Total
                <th id='fix2'> Record Delete";
    
    while($data=mysql_fetch_array($qry))
    {
        $_SESSION['no']=$data[1];
        echo "<tr>";
        echo "<td  class='add_center'>".$data[1];
        echo "<td id='pname' class='add_center'>".$data[2];
        echo "<td class='add_center'>".$data[3];
        echo "<td class='add_center'>".$data[4];
        echo "<td class='add_center'>".$data[5];
        echo "<td class='add_center'>".$data[6];
        echo "<td class='add_center'>".$data[7];
        echo "<td class='add_center'>".$data[8];
        echo "<td> <a href='delete_record.php'>Delete</a>";
    }
    echo "</table>";
    }

    if($table2>0)
    {
    echo "<table id='add2' border=3 cellpadding=10 class='table'>";
    echo "<tr>
                <th> No
                <th id='fix3'> Product Name
                <th> Quantity
                <th> Price
                <th> Total
                <th id='fix2'> Record Delete";
    
    while($data=mysql_fetch_array($r))
    {
        $_SESSION['no2']=$data[1];
        echo "<tr>";
        echo "<td class='add_center'>".$data[1];
        echo "<td  id='pname' class='add_center'>".$data[2];
        echo "<td class='add_center'>".$data[3];
        echo "<td class='add_center'>".$data[4];
        echo "<td class='add_center'>".$data[5];
        echo "<td> <a href='delete_record2.php'>Delete</a>";
    }
    echo "</table>";
    }
    if($table1==0&&$table2==0)
    {
        echo  "
        <div class='success' style='color:black' id='connect-register'>
                            <div style='background-color:aqua; 
                                        box-shadow:0px 5px 45px black; 
                                        padding:5px 22px 5px 23px;'> 
                                            SHAJANAND STONE INDUSTRIES
                            </div> <br><br> 
                                Your order is a not available,<br>
                                Click for 
                                <a href='home.html' style='color:hwb(243 0% 0%)'>Order</a>
                        </div>";
    }
}
else
{
    echo  "
        <div class='success' style='color:black' id='connect-register'>
                            <div style='background-color:aqua; 
                                        box-shadow:0px 5px 45px black; 
                                        padding:5px 22px 5px 23px;'> 
                                            SHAJANAND STONE INDUSTRIES
                            </div> <br><br> 
                                Your must login first to view orders,<br>
                                Click for 
                                <a href='login_page/login.php' style='color:hwb(243 0% 0%)'>Login</a>
                        </div>";
}

    mysql_close();
?>

