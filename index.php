<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <?php include("modules/meta.php"); ?>

        <title>Plum Paper</title>

        <script type = "text/javascript">
            function displayNextImage() {
                x = (x === images.length - 1) ? 0 : x + 1;
                document.getElementById("banner").src = images[x];
            }

            function displayPreviousImage() {
                x = (x <= 0) ? images.length - 1 : x - 1;
                document.getElementById("banner").src = images[x];
            }

            function startTimer() {
                setInterval(displayNextImage, 10000);
            }

            var images = [], x = -1;
            images[0] = "images/home_banner_1.png";
            images[1] = "images/home_banner_2.png";
            images[2] = "images/home_banner_1.png";
            images[3] = "images/home_banner_2.png";

        </script>

    </head>

    <body onload= "startTimer()">

        <div class="body">  


            <div id="navigation">
                <?php include("modules/navigation.php"); ?>
            </div>

            <div class="upperdivider">
                <img src="images/home_divider_line.png" alt="divider">
            </div>

            <div>
                <img id="banner" src="images/home_banner_1.png"/> 
            </div>

            <div id="designhandmade">
                <a href="#"><img src="images/designyourowncover.png" alt="design" id="design"></a>
                <img src="images/allproducts.png" alt="handmade" id="handmade">
            </div>

            <div class="upperdivider">
                <img src="images/home_divider_line.png" alt="divider">
            </div>

            <div id="homepp">
                <img src="images/home_pp.png" alt="plumpaper">
            </div>

            <div id="roundbuttons">
                <a href="products.php"><img src="images/home_circle_1.png" alt="homecirleplanner" id="round1"></a>
                <a href="addons.php"><img src="images/home_circle_2.png" alt="homecirleaddon" id="round2"></a>                
                <a href="shop.php"><img src="images/home_circle_3.png" alt="homecirleshop" id="round3"></a>
            </div>

            <div id="footer">
                <?php include("modules/footer.php"); ?>
            </div>
            
            <div id="end"></div>

        </div>


    </body>
</html>
