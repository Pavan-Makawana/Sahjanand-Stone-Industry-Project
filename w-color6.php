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
                <img src="img/wish_basine/w61.jpg" alt="">
                <img src="img/wish_basine/w62.jpg" alt="">
                <img src="img/wish_basine/w63.jpg" alt="">
                <img src="img/wish_basine/w64.jpg" alt="">
            </div>
            <div class="indicators">
                <span id="btn1" class="active" ></span>
                <span id="btn2"></span>
                <span id="btn3"></span>
                <span id="btn4"></span>
            </div>
        </div>
       <br>
        <h1 class="color-h1">DELTA 2 In 1 Table Top & Wall Hung Corner Premium Ceramic Wash Basin White (M01) (16*16*5) (1001) Corner Basin (White) </h1> 
       <br>
        <ol id="first-ol">
            <lh>PRODUCT DETAILS</lh>    <br>
                <li>COLOR          :-White</li>       
                <li>SIZE IN INCHES :- 16 X 16 X 5 Inch</li> 
                <li>SHAPE          :- Circle</li>   
        </ol>
       <br>
       <h3 id="price">Price :<span class="color-span1"><img src="rupee_img.png" alt="" id="rupee">2,499</span></h3>
       <form name="f1" action="w-color6.php" method="post">
        <span class="color-span2">
            <center class="color-enter">Quantity    :  <input type="number" name="qty" size=2px  class="color-input"></center>
        </span>
        <input type="text" name="pname"style="display:none" size=5px value="DELTA 2 In 1 Table Top Wash Basin">
        <input type="text" name="rname"style="display:none" size=5px value="2499">
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