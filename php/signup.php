<?php
    include 'header.php';
?>
        <div class="container">
            <div class="signup-form">
                <h1>Create a new account</h1>

                <form action="../includes/signup.inc.php" method="POST">                    
                    <input type="text" name="firstname" placeholder="Firstname" required><br>
                    <input type="text" name="lastname" placeholder="Lastname" required><br>
                    <input type="email" name="email" placeholder="Email" required><br>
                    <input type="password" name="pwd" placeholder="Password" required><br>
                    <input type="password" name="cpwd" placeholder="Comfirm Password" required><br>
                    <button type="submit">SIGN UP</button>
                </form>
            </div>
        </div>
        
<?php
    include 'footer.php';
?>