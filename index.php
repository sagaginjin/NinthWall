<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        Ninth Wall
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/nw.png">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-logo">
                <a href="index.html">
                        <img src="img/nw.png" alt="NinthWallLogo">
                    </a>
            </div>

            <div class="header-search">
                <form accept-charset="UTF-8" action="php/search.php" method="GET">
                    <input type="text" name="search" placeholder="Search">
                </form>
            </div>

            <div class="header-nav">
                <nav>
                    <ul>
                        <li class="header-nav-item"><a href="group.html">Groups</a></li>
                        <li class="header-nav-item"><a href="event.html">Events</a></li>
                        <li class="header-nav-item"><a href="forum.html">Forum</a></li>
                    </ul>
                </nav>
            </div>

            <div class="user-nav">
                <nav>
                    <ul>
                        <li class="user-nav-item"><a href="addgroup.html">Add group</a></li>
                        <?php
                            if (!isset($_SESSION['id'])){
                                echo "<li class='user-nav-item'><a href='php/signup.php'>Sign up </a> or <a href='php/login.php'>Log in </a>
                                </li>";
                            } else {
                                echo "<li class='user-nav-item'><a href='includes/signout.inc.php'>Sign out <img src='img/dropdown.png'></a>
                                    <ul>
                                        <li><a href='#'>Your profile</a></li>
                                        <li><a href='#'>Settings</a></li>
                                        <li><a href='#'>Sign out</a></li>
                                    </ul>
                                </li>";
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <section>
        <div class="container">
            <div class="main-banner" id="main-banner">
                <div class="imgbanbtn imgbanbtn-prev" id="imgbanbtn-prev">

                </div>
                <div class="imgban" id="imgban3">
                    <div class="imgban-text">
                        <h2>Ride the horses</h2>
                        <p>On real horseback, and at grassland.</p>
                    </div>
                </div>
                <div class="imgban" id="imgban2">
                    <div class="imgban-text">
                        <h2>Try exotic dishes</h2>
                        <p>A variety of flavors in your mouth.</p>
                    </div>
                </div>
                <div class="imgban" id="imgban1">
                    <div class="imgban-text">
                        <h2>See the mountains</h2>
                        <p>At mount chiliad, the talest mountain.</p>
                    </div>
                </div>
                <div class="imgbanbtn imgbanbtn-next" id="imgbanbtn-next">

                </div>
            </div>


            <div class="index-event">
                <article>
                    <h3>
                        Game
                    </h3>
                    <div class="event-img-gaming">

                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacinia lobortis felis et tempus. 
                    </p>
                </article>
                <article>
                    <h3>
                        Movie
                    </h3>
                    <div class="event-img-movie">

                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacinia lobortis felis et tempus. 
                    </p>
                </article>
                <article>
                    <h3>
                        Book
                    </h3>
                    <div class="event-img-reading">

                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacinia lobortis felis et tempus. 
                    </p>
                </article>
                <article>
                    <h3>
                        Music
                    </h3>
                    <div class="event-img-music">

                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacinia lobortis felis et tempus. 
                    </p>
                </article>
                <article>
                    <h3>
                        Hike
                    </h3>
                    <div class="event-img-hiking">

                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacinia lobortis felis et tempus. 
                    </p>
                </article>
            </div>
        </div>
    </section>

    <aside>

    </aside>

    <footer>
        <div class="container">
            <div class="footer-nav-left">
                <nav>
                    <ul>
                        <li class="footer-nav-left-item copyright">&copy 2017 NinthWall</li>
                        <li class="footer-nav-left-item"><a href="help.html">Help</a></li>
                        <li class="footer-nav-left-item"><a href="terms.html">Terms</a></li>
                        <li class="footer-nav-left-item"><a href="privacy.html">Privacy</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-logo-wrapper">
                <div class="footer-logo">
                    <a href="index.php">
                            <img src="img/nw.png" alt="NinthWallLogo">
                        </a>
                </div>
            </div>
            <div class="footer-nav-right">
                <nav>
                    <ul>
                        <li class="footer-nav-right-item"><a href="contact.html">Contact</a></li>
                        <li class="footer-nav-right-item"><a href="api.html">API</a></li>
                        <li class="footer-nav-right-item"><a href="about.html">About</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <script src="js/banner.js">

    </script>
</body>

</html>