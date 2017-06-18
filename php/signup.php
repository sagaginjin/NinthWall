<?php
    include 'header.php';
?>

<?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=cpwd') !== false) {
        echo "Wrong password!";
    }
    elseif (strpos($url, 'error=username') !== false) {
        echo "Email already exists!";
    }
?>
        <div class="container">
            <div class="signup-form">
                <h1>Join NinthWall</h1>

                <div class="signup-input">
                    <form action="../includes/signup.inc.php" method="POST">                    
                        <input type="text" name="firstname" placeholder="Firstname" required><br>
                        <input type="text" name="lastname" placeholder="Lastname" required><br>
                        <input type="email" name="email" placeholder="Email" required><br>
                        <input type="password" name="pwd" placeholder="Password" required><br>
                        <input type="password" name="cpwd" placeholder="Comfirm Password" required><div class="error">
                            </div><br>
                        <button type="submit">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>
        
<?php
    include 'footer.php';
?>