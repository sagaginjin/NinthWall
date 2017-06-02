<?php
    include 'header.php';
?>

        <h1>Log in your account</h1>

        <form action="userlogin.php" method="POST">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="pwd" placeholder="Password" required><br>
            <button type="submit">LOG IN</button>
        </form>

<?php
    include 'footer.php';
?>