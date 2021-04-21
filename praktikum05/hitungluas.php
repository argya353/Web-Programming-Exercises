<?php
    $n=$_GET['nama'];
    $d=$_GET['dia'];
    $t=$_GET['tinggi'];
    $pi=3.14;
    $r=$d/2;
    $L=$pi*$r*$r*$t;

    echo "Luas tabung $n dengan diameter $d dan tinggi $t adalah $L satuan luas"
?>