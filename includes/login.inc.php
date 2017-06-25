<?php
    session_start();
    include '../php/dbh.php';

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];


    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $hash_pwd = $row['pwd'];
    $hash = password_verify($pwd, $hash_pwd);

    if ($hash == 0) {
        header('Location: ../php/login.php?error=pwd');
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE email = '$email' AND pwd = '$hash_pwd'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if (!$row) {
            echo "Your email or password is incorrect! Please try again.";
        }else {
            $_SESSION['id'] = $row['id'];
            header('Location: ../index.php');
        }
    }
