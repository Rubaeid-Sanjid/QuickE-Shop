<?php
    $hostname = "http://localhost/QuickE-Shop";
    
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $db = "quicke-shop";

    $conn = mysqli_connect($localhost, $username, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>