<?php
    include 'header.php';
?>
        <div class="container">
            <h1>Create a new account</h1>

            <form action="signin.php" method="POST">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="text" name="name" placeholder="Name" required><br>
                <input type="password" name="pwd" placeholder="Password" required><br>
                <input type="password" name="cpwd" placeholder="Comfirm Password" required><br>
                <button type="submit">SIGN UP</button>
            </form>
        </div>
        
<?php
    include 'footer.php';
?>