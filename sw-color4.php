<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="img_scroll/img_scroll.css">
    <title></title>
</head>
<body>
    <?php require("navbar.php"); ?>
    <a href="img4.php"><img src="back1.png" id="back-button" alt=""></a>
    <div class="center">
        <div class="slider_box">
            <div id="slider">
            <img src="img/wish_basine_stand/sw41.jpg" alt="">
            <img src="img/wish_basine_stand/sw42.jpg" alt="">
            <img src="img/wish_basine_stand/sw43.jpg" alt="">
            <img src="img/wish_basine_stand/sw44.jpg" alt="">
            </div>
            <div class="indicators">
                <span id="btn1" class="active" ></span>
                <span id="btn2"></span>
                <span id="btn3"></span>
                <span id="btn4"></span>
            </div>
        </div>
       <br>
        <h1 class="color-h1">ARVIND SANITARY BROWN GLASS WASH BASIN ( BROWN BATLA SET ) WALL HUNG BASIN ( BROWN )</h1> 
       <br>
        <ol id="first-ol">
            <lh>PRODUCT DETAILS</lh>    <br>
                <li>COLOR          :- Brown</li>       
                <li>SIZE IN INCHES :- 17 X 17 X 37 Inch</li> 
                <li>SHAPE          :- Circle </li>   
        </ol>
       <br>
       <h3 id="price">Price :<span class="color-span1"><img src="rupee_img.png" alt="" id="rupee">5,699</span></h3>
       <br>
       <form name="f1" action="sw-color4.php" method="post">
        <span class="color-span2">
            <center class="color-enter">Quantity    :  <input type="number" name="qty" size=2px  class="color-input"></center>
        </span>
        <input type="text" name="pname"style="display:none" size=5px value="ARVIND SANITARY BROWN GLASS WASH BASIN ">
        <input type="text" name="rname"style="display:none" size=5px value="5699">
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