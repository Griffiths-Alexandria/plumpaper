<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <?php include("modules/meta.php"); ?>

        <title>Products</title>
        <script>
            function loadDocME() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "products/meplanner.html", true);
                xhttp.send();
            }

            function loadDocReg() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "products/regularplanner.html", true);
                xhttp.send();
            }

            function loadDocMon() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "products/monthlyplanner.html", true);
                xhttp.send();
            }
            function loadDocTeach() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "products/teacherplanner.html", true);
                xhttp.send();
            }
            function loadDocStud() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "products/studentplanner.html", true);
                xhttp.send();
            }
            function loadDocFit() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "products/fitnessplanner.html", true);
                xhttp.send();
            }
            function loadDocAdd() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "products/addressbook.html", true);
                xhttp.send();
            }
            function loadDocMem() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "products/memorykeeper.html", true);
                xhttp.send();
            }
            function loadDocNote() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "products/notebook.html", true);
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

            <div class="ajaxproducts">

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
                    
                    <div class="clickover"><span class="glyphicon glyphicon-hand-left"></span> Please click to learn more about our products!</div>
                    
                    </div>

                <div class="sidenav">
                    
                    <button onclick="loadDocME()" class="addonbutton">ME Planner</button>
                    <button onclick="loadDocReg()" class="addonbutton">Regular Planner</button>
                    <button onclick="loadDocMon()" class="addonbutton">Monthly Planner</button>
                    <button onclick="loadDocTeach()" class="addonbutton">Teacher Planner</button>
                    <button onclick="loadDocStud()" class="addonbutton">Student Planner</button>
                    <button onclick="loadDocFit()" class="addonbutton">Fitness Planner</button>
                    <button onclick="loadDocAdd()" class="addonbutton">Address Book</button>
                    <button onclick="loadDocMem()" class="addonbutton">Memory Keeper</button>
                    <button onclick="loadDocNote()" class="addonbutton">Notebook</button>
           
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

