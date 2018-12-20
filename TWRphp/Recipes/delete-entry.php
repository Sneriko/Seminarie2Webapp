<?php
session_start();
include "../dbh.inc.php";
$var = $_GET["id"];
$var2 = $_SESSION['recipe'];
echo $var;
$sql = "DELETE FROM comments WHERE id='$var'";
$conn->query($sql);
header("Location: /Recipes/recipes.php?id=$var2");