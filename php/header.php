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
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="image/png" href="../img/nw.png">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-logo">
                <a href="../index.php">
                        <img src="../img/nw.png" alt="NinthWallLogo">
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
                                echo "<li class='user-nav-item'><a href='signup.php'>Sign up </a> or <a href='login.php'>Log in </a>
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