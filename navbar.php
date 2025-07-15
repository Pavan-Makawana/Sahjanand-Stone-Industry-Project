<?php

echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel='stylesheet' href='css_file.css'>
    <link rel='stylesheet' href='Menubar/111.css'>
    <script src='Menubar/111.js '></script>
    <title>my project</title>
</head>
<body>
    

    
<div class='navbar'>
        <div id='menu' onclick='onclickmenu()'>
            <div id='bar1' class='bar'></div>
            <div id='bar2' class='bar'></div>
            <div id='bar3' class='bar'></div>
        </div>
        <ul class='nav' id='nav'>
            <li><a href='home.html'>home</a></li>
            <li id='li-2'><a href='home.html'>Product <b id='b-1'>+</b> <b id='b-2'>_</b></a>
                <ul id='li-2-ul'>
                    <li><a href='img1.php'>Granite</a></li>
                    <li><a href='img2.php'>Kota Stone</a></li>
                    <li><a href='img3.php'>Marble</a></li>
                    <li><a href='img4.php'>Stand Wash Basin</a></li>
                    <li><a href='img5.php'>Cement Product</a></li>
                    <li id='li-2-ul-li-6'><a href='img6.php'>Wash Basin</a></li>
                </ul>
            </li>
            <li id='li-a'><a href='about_us.php'>About Us</a></li>
            <li><a href='contact_us.php'>Contact Us</a></li>
            <!-- <li><a href='img1.php'>Granite</a></li>
            <li><a href='img2.php'>Kota Stone</a></li>
            <li><a href='img3.php'>Marble</a></li>
            <li><a href='img4.php'>Stand Wash Basin</a></li>
            <li><a href='img5.php'>Cement Product</a></li>
            <li><a href='img6.php'>Wash Basin</a></li> -->
        </ul>
        <h3>sahjanand stone industries</h3>
        <a class='a-1' href='login_page/login.php'>Login</a>  
        <a class='a-2' href='login_page/register.php'>Register</a>
        <a class='a-3' href='login_page/logout.php'>Logout</a>
        <a class='a-4' href='add_card.php'><img id='add_to_card' src='img/card.png' ></a>
        <span id='card'>Card</span>
    </div>
</body>
</html>
";

?>

