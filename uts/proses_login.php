<?php
$nama = $_POST['Nama'];
$email = $_POST['Email'];

setcookie("Nama",$_POST['Nama']);
setcookie("Email",$_POST['Email']);

header('Location:welcome.php')
?>