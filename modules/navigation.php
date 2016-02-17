<script type="text/javascript">
function nav(){
$('.nav li').hover(function() {
     $(this).find('ul:first').stop().animate({height: '200px', opacity: '100'},    {queue:false, duration:200, easing: 'easeInSine'})
        }, function() {
     $(this).find('ul:first').stop().animate({height: '0px', opacity: '0'},    {queue:false, duration:100, easing: 'easeInCirc'}) 
      });
  };
  $(document).ready(function() {
    nav();
});
</script>



<div>
    <img src="images/plum_logo.jpg" alt="logo" id="logo">
</div>

<div class="upperdivider">
    <img src="images/home_divider_line.png" alt="divider">
</div>

<nav>

    <label for="show-menu" class="show-menu">Menu</label>
    <input type="checkbox" id="show-menu" role="button">

    <ul>

        <li><a href="index.php" title="Home">home</a></li>
        <li class="navimage"><a href="products.php" title="products">learn about our products</a>
            <!--<ul>
                <li><a href="/subpages/">ME Planners (Family Planner)</a></li>
                <li><a href="/subpages/">Regular Planners</a></li>
                <li><a href="/subpages/">Monthly Notebook Planners</a></li>
                <li><a href="/subpages/">Teacher Planners</a></li>
                <li><a href="/subpages/">Student Planners</a></li>
                <li><a href="/subpages/">Fitness Planners</a></li>
                <li><a href="/subpages/">Address Book</a></li>
                <li><a href="/subpages/">Memory Keeper Book</a></li>
                <li><a href="/subpages/">Notebooks</a></li>
            </ul>-->
        </li>
        <li class="navimage"><a href="addons.php" title="addons">learn about our add ons</a>
            <!--<ul class="hidden">
                <li><a href="/subpages/">My Home Planning Section</a></li>
                <li><a href="/subpages/">Fitness Planner Section</a></li>
                <li><a href="/subpages/">Meal Planning Section</a></li>
                <li><a href="/subpages/">Blog Planning Section</a></li>
                <li><a href="/subpages/">Direct Sales Planning Section</a></li>
                <li><a href="/subpages/">Baby Planning Section</a></li>
                <li><a href="/subpages/">Wedding Planning Section</a></li>
                <li><a href="/subpages/">My Class Section</a></li>
                <li><a href="/subpages/">Notes Pages</a></li>
                <li><a href="/subpages/">To-Do List Pages</a></li>
                <li><a href="/subpages/">Bill Tracker Pages</a></li>
                <li><a href="/subpages/">Monthly Cleaning Pages</a></li>
                <li><a href="/subpages/">Checklist Pages</a></li>
                <li><a href="/subpages/">Contact Pages</a></li>
                <li><a href="/subpages/">Stickers</a></li>
            </ul>-->
        </li>
        <li class="navimage"><a href="shop.php" title="shop">shop</a></li>
        <li class="navimage"><a href="contact.php" title="contact">contact us</a></li>
        <li><a href="faq.php" title="faqs">faqs</a>
            <!--<ul class="hidden">
                <li><a href="/subpages/">General Questions</a></li>
                <li><a href="/subpages/">Ordering Questions</a></li>
                <li><a href="/subpages/">Planner Questions</a></li>
            </ul>-->
        </li>
        <li><a href="about.php" title="about" id="aboutplum">about plum</a></li>
    </ul>

</nav>



