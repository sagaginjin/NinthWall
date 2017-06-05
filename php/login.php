<?php
    include 'header.php';
?>
        <div class="container">
            <div class="login-form">
                <h1>Log in your account</h1>

                <form action="../includes/login.inc.php" method="POST">
                    <input type="email" name="email" placeholder="Email" required><br>
                    <input type="password" name="pwd" placeholder="Password" required><br>
                    <button type="submit">LOG IN</button>
                </form>
            </div>
        </div>

<?php
    include 'footer.php';
?>