<?php
session_start();
setcookie("Nama","");
setcookie("Email","");
$_SESSION["lives"]="";
$_SESSION["score"]="";
header("Location:login.html");
?>