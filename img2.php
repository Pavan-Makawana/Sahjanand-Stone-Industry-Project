<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="img_scroll/img_scroll.css">
    <title></title>
</head>
<body>
    <?php require("navbar.php"); ?> 
    <a href="home.html"><img src="back1.png" id="back-button" alt=""></a>
    <div class="center">
        <div class="slider_box">
            <div id="slider">
            <img src="img/kota_stone/ks11.jpg" alt="">
            <img src="img/kota_stone/ks12.jpeg" alt="">
            <img src="img/kota_stone/ks13.jpg" alt="">
            <img src="img/kota_stone/ks14.webp" alt="">
            </div>
            <div class="indicators">
                <span id="btn1" class="active" ></span>
                <span id="btn2"></span>
                <span id="btn3"></span>
                <span id="btn4"></span>
            </div>
        </div>
       <br>
        <h1 class="color-h1">KOTA STONE</h1> 
       <br> 
        <h2 class="color-h2">
            <ul id="first-ul">
                <lh>FEATURES</lh>   <br>
                    <li>Fine Finish Or Crack Poroof</li>
                    <li>High Strength</li>
                    <li>Made In India</li>
            </ul>
            <ul id="first-ul">  
                <lh>SPECIFICATIONS</lh> <br>
                    <li>Slab Thickness : 10 mm - 14 mm</li>
                    <li>Size : As Per Client's Need </li>
                    <li>Used For Pathways, etc</li>
            </ul>
        </h2>
       <br>
        <h3 class="color-h3"><span class="color-span1"><img src="rupee_img.png" alt="" id="rupee">200.00</span>/Square Feet</h3>
       <br>
       <form name="f1" action="img2.php" method="post">
        <span class="color-span2">
            <center class="color-enter">Enter  wigth  :  <input type="text" placeholder="Feet" name="wigth" size=5px class="color-input" required></center>
            <center class="color-enter">Enter Height  :  <input type="text" placeholder="Feet" name="height" size=5px  class="color-input" required></center>         
            <br>
            <center class="color-enter">Quantity    :  <input type="number" name="qty" size=2px  class="color-input" required></center>
        </span><br>
        <input type="text" name="pname"style="display:none" size=5px value="KOTA STONE">
        <input type="text" name="rname"style="display:none" size=5px value="200">
      <input type="submit"  class="btn" name="bsubmit" value="Buy">
      <br><br>
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
    require("buy.php");
}
?>