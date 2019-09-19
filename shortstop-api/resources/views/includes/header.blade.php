<header>
    <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
    <div><a href="javascript:void(0);" class="navicon" onclick="openNav()">Menu</a></div>
        <script>
            function openNav(){
                var nav = document.querySelector('.nav');
                if(nav.style.display === "block"){
                    nav.style.display = 'none';
                }
                else{
                    nav.style.display = 'block';
                }
            }
        </script>
    <div id="big-login">
        <div class="social-media">
            <span id="followUS">Follow US </span>
            <a href="http://www.facebook.com/Athletic-Prospects-191313784947225" target="_blank" class="fa fa-facebook"></a>
            <a href="http://www.twitter.com/A_Prospects" target="_blank" class="fa fa-twitter"></a>
            <a href="http://www.instagram.com/athleticprospects" target="_blank" class="fa fa-instagram"></a>
            <!-- <a href="mailto:kprestano@athleticprospects.com" class="fa fa-envelope"></a> -->
        </div>
        <ul>
            <?php
                if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']){
                    echo "<li id='big-login-button'><a class='link' href='logout.php'>Logout</a></li>";
                }
                else{
                    echo "<li id='big-login-button'><a class='link' href='login.php'>Login</a></li>";
                }
            ?>
           <!-- <li id="big-login-button"><a href="login.php">Login</a></li>-->
        </ul>
    </div><!-- #big-login end
   --><div id="search">
        <div id="search-container">
            <form action='results.php' method='POST' id="search-form">
                <input id="textbox" type="text" size="50" placeholder= "First or Last Name" name="search">
                <input id="button" class="searchbtn" type="submit" name="search-btn" value="Search">
            </form>
        </div>
    </div>
        <div class="nav">
            <ul>
                <?php
                    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']){
                        echo "<li id='mobile-login'><a class='link' href='logout.php'>Logout</a></li>";
                    }
                    else{
                        echo "<li id='mobile-login'><a class='link' href='login.php'>Login</a></li>";
                    }
                ?>
                <li id="current"><a href="/">Home</a></li>
                <li><a href="/profile">My Profile</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/players">Browse Athletes</a></li>
               <?php // <li><a href="findcoaches.php">Find Coaches</a></li>
                //<li><a href="services.php">Services</a></li> ?>
                <li><a href="/register">Register</a></li>
                <li><a href="/blog">Blog</a></li>
            </ul><!-- end of #top-bar -->
        </div>
    <div id="logo"><img src="/images/siteLogo.png" alt="logo" id="logo-img"></div>
</header>