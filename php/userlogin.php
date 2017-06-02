<?php
    session_start();
    include 'dbh.php';

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM user WHERE name = '$email' AND pwd = '$pwd';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "Your email or password incorrect! Please try again.";
    }else {
        $_SESSION['id'] = $row['id'];
        header('Location: ../index.html');
    }
