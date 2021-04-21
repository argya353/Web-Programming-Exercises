<?php
    $namaFile="datamhs.dat";
    $myfile=fopen($namaFile,"a") or die("Tidak bisa buka file");
    fwrite($myfile, "\n".$_POST['nim'].'|'.$_POST['nama'].'|'.$_POST['tgllhr'].'|'.$_POST['tmptlhr']);
    fclose($myfile);

    echo "Berhasil tambah data";
?>