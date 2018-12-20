<?php
    require 'dbh.inc.php';

    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $sql = "INSERT INTO registeredusers (usernameUsers, pwdUsers) VALUES ('$username', '$password')";
    $conn->query($sql);
    $conn->close();
    header("Location: index.php");

