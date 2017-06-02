<?php
    include 'dbh.php';
    include 'header.php';
?>

        <aside>
        </aside>

        <h1>Create a new account</h1>

        <form action="Signup.php" method="POST">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="comfirmpassword" placeholder="Comfirm Password" required><br>
            <button type="submit">SIGN UP</button>
        </form>

<?php
    include 'footer.php';
?>