<?php

$conn = mysqli_connect('localhost', 'root', '', 'ninthwalldb');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
