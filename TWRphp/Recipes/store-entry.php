<?php
include '../dbh.inc.php';
session_start();

$var = $_SESSION['recipe'];
$var2 = $_SESSION['username'];
$var3 = $_POST['comment'];

$sql = "INSERT INTO comments (recipe, username, comment) VALUES ('$var', '$var2', '$var3')";
$conn->query($sql);
header("Location: /recipes/recipes.php?id=$var");


