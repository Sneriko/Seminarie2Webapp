<?php
require 'dbh.inc.php';
$username = $_POST['username'];
$password = $_POST['pwd'];
$sql = "SELECT * FROM registeredusers WHERE usernameUsers = '$username'";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo $row['pwdUsers'];
    echo $password;
    /*$pwdcheck = equals($password, $row['pwdUsers']);*/
    if ($password <> $row['pwdUsers']) {
        session_start();
        $_SESSION['active'] = '0';
        header("Location: index.php?error=wrongpwd");
    }
    else{
        session_start();
        $_SESSION['active'] = '1';
        $_SESSION['userid'] = $row['idusers'];
        $_SESSION['username'] = $row['usernameUsers'];

        header("Location: index.php?Login=success");
    }
}