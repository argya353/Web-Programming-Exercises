<?php
if(!isset($_COOKIE['Nama'])){
    header('Location:login.html');
}else{
    header('Location:welcome.php');
}
?>