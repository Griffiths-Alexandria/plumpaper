<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <?php include("modules/meta.php"); ?>

        <title>Contact Plum Paper</title>
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
                <img src="images/contact/contactheader.png" alt="supportheader">
            </div>

            <div id="supportbuttons">
                <button class="supportbutton"><a href="faq.php"><img src="images/support/account.png" alt="accountbutton"></a></button>
                <button a href='faq.php' class="supportbutton"><img src="images/support/generalquestions.png" alt="generalbutton"></button>
                <button a href='faq.php'  class="supportbutton"><img src="images/support/placingorder.png" alt="placingbutton"></button>
                <button a href='faq.php'  class="supportbutton"><img src="images/support/pendingorder.png" alt="pendingbutton"></button>
                <button a href='faq.php' class="supportbutton"><img src="images/support/shipping.png" alt="shippingbutton"></button>
                <button a href='faq.php'  class="supportbutton"><img src="images/support/problemorder.png" alt="problembutton"></button>
                <button a href='faq.php' class="supportbutton"><img src="images/support/returns.png" alt="returnbutton"></button>

            </div>


            <div class="upperdivider">
                <img src="images/home_divider_line.png" alt="divider">
            </div>

            <div id='contactbody'>
                <img src='images/contact/contactbody.png' alt='contactbody' usemap='#contactmap'>
                
                <map name='contactmap'>
                    <area alt='contactbody' shape='poly' coords='415,177,415,226,1062,224,1076,205,1062,178' href="mailto:hello@plumpaper.com" >
                </map>
                
            </div>

            <div id="footer">
                <?php include("modules/footer.php"); ?>
            </div>

            <div id="end"></div>

        </div>


    </body>
</html>