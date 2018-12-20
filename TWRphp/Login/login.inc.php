<?php
require '../dbh.inc.php';
$username = $_POST['username'];
$password = $_POST['pwd'];

$sql = "SELECT * FROM registeredusers WHERE usernameUsers=?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result  = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($result)){
    if ($password <> $row['pwdUsers']){
        header("Location: ../index.php?error=wrongpassword");
        exit();
    }
    else{
        session_start();
        $_SESSION['userid'] = $row['idusers'];
        $_SESSION['username'] = $row['usernameUsers'];
        header("Location: ../index.php?login=success");
        exit();
    }
}
else{
    header("Location: ../index.php?error=nosuchusername");
    exit();
}

