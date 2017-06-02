<?php

    include 'dbh.php';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];

    $sql = "INSERT INTO user (email, name, pwd) VALUES ('$email', '$name', '$pwd');";
    $result = mysqli_query($conn, $sql);

    header('Location: ../index.html');
