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

                <div id="demo" class="ajaxbody"><h2>*insert product landing page*</h2></div>

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

