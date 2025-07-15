<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="img_scroll/img_scroll.css">
    <title></title>
</head>
<body>
    <?php require("navbar.php"); ?>
    <a href="img6.php"><img src="back1.png" id="back-button" alt=""></a>
    <div class="center">
        <div class="slider_box">
            <div id="slider">
                <img src="img/wish_basine/w11.jpg" alt="">
                <img src="img/wish_basine/w12.jpg" alt="">
                <img src="img/wish_basine/w13.jpg" alt="">
                <img src="img/wish_basine/w14.jpg" alt="">
            </div>
            <div class="indicators">
                <span id="btn1" class="active" ></span>
                <span id="btn2"></span>
                <span id="btn3"></span>
                <span id="btn4"></span>
            </div>
        </div>
       <br>
        <h1 class="color-h1">NEXIS Desiner Table Top Counter Top Wash Basin 18X13X5.5 (Matt Finish) 18X13X5.5 Matt Black Table Top Basin (Black)</h1> 
       <br>
       <ol id="first-ol">
           <lh>PRODUCT DETAILS</lh>    <br>
               <li>COLOR          :- Black</li>       
               <li>SIZE IN INCHES :- 18 X 13 X 5.5 Inch</li> 
               <li>SHAPE          :- Square </li>   
       </ol>
       <br>
       <h3 id="price">Price :<span class="color-span1"><img src="rupee_img.png" alt="" id="rupee">2,399</span></h3>
       <br>
       <form name="f1" action="w-color1.php" method="post">
        <span class="color-span2">
            <center class="color-enter">Quantity    :  <input type="number" name="qty" size=2px  class="color-input"></center>
        </span>
        <input type="text" name="pname"style="display:none" size=5px value="NEXIS Desiner Table Top Counter Top Wash Basin ">
        <input type="text" name="rname"style="display:none" size=5px value="2399">
        <input type="submit"  class="btn" name="bsubmit" value="Buy">
       </form>
    </div>

    <script src="input.js"></script>
    <script src="img_scroll/img_scroll.js"></script>
</body>
</html>


<?php
extract($_POST);
$con=mysql_connect("localhost","root","") or die("Could not connect"); 
mysql_select_db("my project");

if(isset($bsubmit))
{
    require("buy_q.php");
}
?>