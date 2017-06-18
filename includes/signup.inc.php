<?php
    session_start();
    include '../php/dbh.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];

    if (empty($firstname)) {
        header('Location: ../php/signup.php?error=empty');
        exit();
    } 
    elseif (empty($lastname)) {
        header('Location: ../php/signup.php?error=empty');
        exit();
    } 
    elseif (empty($email)) {
        header('Location: ../php/signup.php?error=empty');
        exit();
    } 
    elseif (empty($pwd)) {
        header('Location: ../php/signup.php?error=empty');
        exit();
    } 
    elseif (empty($cpwd)) {
        header('Location: ../php/signup.php?error=empty');
        exit();
    }
    elseif ($pwd !== $cpwd) {
        header('Location: ../php/signup.php?error=cpwd');
        exit();
    }
    else {
        $sql = "SELECT email FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $emailcheck = mysqli_num_rows($result);
        if ($emailcheck > 0) {
            header('Location: ../php/signup.php?error=username');
            exit();
        } else {
            $sql = "INSERT INTO user (email, pwd, firstname, lastname) VALUES ('$email', '$pwd', '$firstname', '$lastname');";
            $result = mysqli_query($conn, $sql);

            header('Location: ../index.php');
        } 
    }