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

                <div id="demo" class="ajaxbody"><h2>Let AJAX change this text</h2></div>

                <div class="sidenav">
                    <button onclick="loadDoc()" class="addonbutton">Meal Planning Section</button>
                    <button onclick="loadDoc2()" class="addonbutton">Budget Planning Section</button>
                    <button onclick="loadDoc3()" class="addonbutton">My Home Section</button>
                    <button onclick="loadDoc4()" class="addonbutton">Fitness Section</button>
                    <button onclick="loadDoc5()" class="addonbutton">Blog Planning Section</button>
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

            <div id="footer">
                <?php include("modules/footer.php"); ?>
            </div>

            <div id="end"></div>

        </div>


    </body>

</html>

