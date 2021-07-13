<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Starbucks Landing Page</title>
        <link href="componentes/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section>
            <div class="circle"></div>
            <header>
                <a href="#" class="logo"><img src="componentes/images/logo.png" alt="alt"/></a>
                <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">What's New</a></li>
                <li><a href="#">Contact</a></li>
                
            </ul> 
            </header>
            <div class="content">
                <div class="textBox">
                    <h2>
                        It's not just Coffee<br>It's <span>Starbucks</span>
                    </h2>
                    <p>Lorem
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#">Lear More</a>
                </div>
                <div class="imgBox">
                    <img src="componentes/images/img1.png" class="starbucks">
                </div>
            </div>
            <ul class="thumb">
                <li><img src="componentes/images/thumb1.png" onclick="imgSlider('componentes/images/img1.png');changeCircleColor('#017143')"></li>
                <li><img src="componentes/images/thumb2.png" onclick="imgSlider('componentes/images/img2.png');changeCircleColor('#eb7495')"></li>
                <li><img src="componentes/images/thumb3.png" onclick="imgSlider('componentes/images/img3.png');changeCircleColor('#d752b1')"></li>
            </ul>
            <ul class="sci">
                <li><a href="#"><img src="componentes/images/facebook.png"></a></li>
                <li><a href="#"><img src="componentes/images/twitter.png"></a></li>
                <li><a href="#"><img src="componentes/images/instagram.png"></a></li>
            </ul>
        </section>
        
        <script type="text/javascript">
            function imgSlider(anything){
                document.querySelector('.starbucks').src=anything;
            }
            
            function changeCircleColor(color){
                const circle = document.querySelector('.circle');
                circle.style.background=color;
            }
            
            function toggleMenu(){
                var menuToggle = document.querySelector('.toggle');
                var navigation = document.querySelector('.navigation')
                menuToggle.classList.toggle('active');
                navigation.classList.toggle('active');
            }
        </script>
        <?php
        // put your code here
        ?>
    </body>
</html>
