<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <?php include("modules/meta.php"); ?>

        <title>About</title>
        <script>
            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/mealplanning.html", true);
                xhttp.send();
            }

            function loadDoc2() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/budgetplanning.html", true);
                xhttp.send();
            }

            function loadDoc3() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/myhome.html", true);
                xhttp.send();
            }
            function loadDoc4() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/fitness.html", true);
                xhttp.send();
            }
            function loadDoc5() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/blog.html", true);
                xhttp.send();
            }
            function loadDoc6() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/directsales.html", true);
                xhttp.send();
            }
            function loadDoc7() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/baby.html", true);
                xhttp.send();
            }
            function loadDoc8() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/wedding.html", true);
                xhttp.send();
            }
            function loadDoc9() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/myclass.html", true);
                xhttp.send();
            }
            function loadDoc10() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/notes.html", true);
                xhttp.send();
            }
            function loadDoc11() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/todo.html", true);
                xhttp.send();
            }
            function loadDoc12() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/billtracker.html", true);
                xhttp.send();
            }
            function loadDoc13() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/cleaning.html", true);
                xhttp.send();
            }
            function loadDoc14() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/checklist.html", true);
                xhttp.send();
            }
            function loadDoc15() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/contact.html", true);
                xhttp.send();
            }
            function loadDoc16() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "addons/stickers.html", true);
                xhttp.send();
            }
        </script>

    </head>

    <body>


        <div class="body">  

            <div id="navigation">
                <?php include("modules/navigation.php"); ?>
            </div>

            <div class="upperdivider">
                <img src="images/home_divider_line.png" alt="divider">
            </div>

            <div class="ajax">



                <div id="demo" class="ajaxbody">
                    
                    <div class="container">
                        <br>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/carousel/slide_1.jpg" alt="Chania" width="460" height="345">
                                </div>

                                <div class="item">
                                    <img src="images/carousel/slide_2.jpg" alt="Chania" width="460" height="345">
                                </div>

                                <div class="item">
                                    <img src="images/carousel/slide_3.jpg" alt="Flower" width="460" height="345">
                                </div>

                                <div class="item">
                                    <img src="images/carousel/slide_4.jpg" alt="Flower" width="460" height="345">
                                </div>
                                
                                <div class="item">
                                    <img src="images/carousel/slide_5.jpg" alt="Flower" width="460" height="345">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                          <!--  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span> 
                          -->
                            </a>
                        </div>
                    </div>

                    <div class="clickover"><span class="glyphicon glyphicon-hand-left"></span> Please click to learn more about our add-ons!</div>

                </div>



                <div class="sidenav">
                    <button onclick="loadDoc()" class="addonbutton">Meal Planning</button>
                    <button onclick="loadDoc2()" class="addonbutton">Budget Section</button>
                    <button onclick="loadDoc3()" class="addonbutton">My Home Section</button>
                    <button onclick="loadDoc4()" class="addonbutton">Fitness Section</button>
                    <button onclick="loadDoc5()" class="addonbutton">Blog Section</button>
                    <button onclick="loadDoc6()" class="addonbutton">Direct Sales Section</button>
                    <button onclick="loadDoc7()" class="addonbutton">Baby Section</button>
                    <button onclick="loadDoc8()" class="addonbutton">Wedding Section</button>
                    <button onclick="loadDoc9()" class="addonbutton">My Class Section</button>
                    <button onclick="loadDoc10()" class="addonbutton">Note Pages</button>
                    <button onclick="loadDoc11()" class="addonbutton">To Do Pages</button>
                    <button onclick="loadDoc12()" class="addonbutton">Bill Tracker Pages</button>
                    <button onclick="loadDoc13()" class="addonbutton">Cleaning Pages</button>
                    <button onclick="loadDoc14()" class="addonbutton">Checklist Pages</button>
                    <button onclick="loadDoc15()" class="addonbutton">Contact Pages</button>
                    <button onclick="loadDoc16()" class="addonbutton">Stickers</button>
                </div>

            </div>

            <div class="limits">
                <img src="images/addonimages/limits.jpg" alt="pagelimit">
            </div>

            <div id="footer">
                <?php include("modules/footer.php"); ?>
            </div>

            <div id="end"></div>

        </div>


    </body>

</html>

