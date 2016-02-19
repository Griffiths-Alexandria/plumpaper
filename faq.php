<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <?php include("modules/meta.php"); ?>

        <title>Plum Support</title>
        <script>

            function loadDocAccount() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById("demos").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "questions/account.html", true);
                xhttp.send();
            }

            function loadDocGeneral() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById("demos").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "questions/general.html", true);
                xhttp.send();
            }

            function loadDocPlacing() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById("demos").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "questions/placing.html", true);
                xhttp.send();
            }
            function loadDocPending() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById("demos").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "questions/pending.html", true);
                xhttp.send();
            }
            function loadDocShipping() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById("demos").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "questions/shipping.html", true);
                xhttp.send();
            }
            function loadDocProblem() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById("demos").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "questions/problem.html", true);
                xhttp.send();
            }
            function loadDocReturns() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById("demos").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "questions/returns.html", true);
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

            <div class="header">
                <img src="images/support/plumsupport.png" alt="supportheader">
            </div>

            <div id="supportbuttons">
                <button onclick="loadDocAccount()" class="supportbutton"><img src="images/support/account.png" alt="accountbutton"></button>
                <button onclick="loadDocGeneral()" class="supportbutton"><img src="images/support/generalquestions.png" alt="generalbutton"></button>
                <button onclick="loadDocPlacing()" class="supportbutton"><img src="images/support/placingorder.png" alt="placingbutton"></button>
                <button onclick="loadDocPending()" class="supportbutton"><img src="images/support/pendingorder.png" alt="pendingbutton"></button>
                <button onclick="loadDocShipping()" class="supportbutton"><img src="images/support/shipping.png" alt="shippingbutton"></button>
                <button onclick="loadDocProblem()" class="supportbutton"><img src="images/support/problemorder.png" alt="problembutton"></button>
                <button onclick="loadDocReturns()" class="supportbutton"><img src="images/support/returns.png" alt="returnbutton"></button>

            </div>


            <div class="upperdivider">
                <img src="images/home_divider_line.png" alt="divider">
            </div>

            <div id="demos" class="ajaxsupport">
           
            <h2 id="faqpink">please click the buttons above to find the answers to our <br> frequently asked questions</h2>
        
            </div>


            <div id="footer">
                <?php include("modules/footer.php"); ?>
            </div>

            <div id="end"></div>

        </div>


    </body>
</html>