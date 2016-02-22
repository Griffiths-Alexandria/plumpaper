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

            <div id="explain">
                <div class="upperdivider">
                    <img src="images/home_divider_line.png" alt="divider">
                </div>

                <h2 id="faq">we may have already answered your question! please click below.</h2>


            </div>

            <div id="supportbuttons">
                <button class="supportbutton"><a href="faq.php"><img src="images/support/account.png" alt="accountbutton"></a></button>
                <button class="supportbutton"><a href="faq.php"><img src="images/support/generalquestions.png" alt="generalbutton"></a></button>
                <button class="supportbutton"><a href="faq.php"><img src="images/support/placingorder.png" alt="placingbutton"></a></button>
                <button class="supportbutton"><a href="faq.php"><img src="images/support/pendingorder.png" alt="pendingbutton"></a></button>
                <button class="supportbutton"><a href="faq.php"><img src="images/support/shipping.png" alt="shippingbutton"></a></button>
                <button class="supportbutton"><a href="faq.php"><img src="images/support/problemorder.png" alt="problembutton"></a></button>
                <button class="supportbutton"><a href="faq.php"><img src="images/support/returns.png" alt="returnbutton"></a></button>

            </div>

            <div class="upperdivider">
                <img src="images/home_divider_line.png" alt="divider">
            </div>


            <div id='contactbody'>
                <img src='images/contact/contactmap2.png' alt='contactbody' usemap='#contactmap'>

                <map name='contactmap'>
                    <area alt='contactbody' shape='poly' coords='415,177,415,226,1062,224,1076,205,1062,178' href="mailto:hello@plumpaper.com" >
                </map>

            </div>

            <div>
                <p id="contactcontent">
                    Most of your questions can be answered by checking our <span class="purple"> Frequently Asked Questions! </span> Check out our <span class="purple">FAQs </span> in the above icons.
                    <br><br>

                    If you do not find your answer in our FAQs, email is the best way to get in touch with us! We have a team ready to respond quickly to all your questions. 
                    All emails will be responded to during regular business hours. Our hours are <span class="purple">Monday - Friday 9:00am - 5:00pm PST</span>. 
                    If you email us over the weekend, we will respond as quickly as possible once we are back in the office.  
                </p>
            </div>

            <div id="footer">
                <?php include("modules/footer.php"); ?>
            </div>

            <div id="end"></div>

        </div>


    </body>
</html>