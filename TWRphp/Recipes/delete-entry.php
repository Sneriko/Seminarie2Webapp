<?php
session_start();
include "../dbh.inc.php";
$var = $_GET["id"];
echo $var;
$sql = "DELETE FROM comments WHERE id='$var'";
$conn->query($sql);