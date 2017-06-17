<?php
    session_start();
    include '../php/dbh.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "INSERT INTO user (email, pwd, firstname, lastname) VALUES ('$email', '$pwd', '$firstname', '$lastname');";
    $result = mysqli_query($conn, $sql);

    header('Location: ../index.php');
