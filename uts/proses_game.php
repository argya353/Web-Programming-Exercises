<?php
session_start();
$jumlah = $_COOKIE['angka1'] + $_COOKIE['angka2'];

$jawaban = $_POST['jawaban'];

if ($_SESSION['lives'] > 1){
    if ($jawaban == $jumlah){
        $_SESSION['score'] = $_SESSION['score'] + 10;
        header("location:benar.php");
    }else{
        $_SESSION['lives'] = $_SESSION['lives'] - 1;
        if($_SESSION['score'] > 1){
            $_SESSION['score'] = $_SESSION['score'] - 2;
        }
        header("location:salah.php");
    }
}else{
    header('location:gameover.php');
}

?>