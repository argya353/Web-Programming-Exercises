<?php
    $namafile="myfile.txt";
    $myfile=fopen($namafile,"r")or die("Tidak bisa membuka file!");
    echo fread($myfile,filesize($namafile));
    fclose($myfile);
?>