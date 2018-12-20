<?php
    require 'dbh.inc.php';

    $username = $_POST["username"];
    $password = $_POST["pwd"];
    if (empty($username)||empty($password)){
        header("Location: /index.php?error=emptyfields");
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: /index.php?error=invalidusername");
        exit();
    }
    $sql = "SELECT usernameUsers FROM registeredusers WHERE usernameUsers=?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if ($resultCheck > 0){
        header("Location: /index.php?error=usernameexists");
        exit();
    }
    $sql = "INSERT INTO registeredusers (usernameUsers, pwdUsers) VALUES ('$username', '$password')";
    $conn->query($sql);
    $conn->close();
    header("Location: index.php?signup=success");

