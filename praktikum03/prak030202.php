<?php
    function hitungDenda($d1,$d2){
        $exp1=explode("-",$d1);
        $dd1=$exp1[2];
        $mm1=$exp1[1];
        $yyyy1=$exp1[0];

        $exp2=explode("-",$d2);
        $dd2=$exp2[2];
        $mm2=$exp2[1];
        $yyyy2=$exp2[0];

        $jd1=GregorianToJD($mm1,$dd1,$yyyy1);
        $jd2=GregorianToJD($mm2,$dd2,$yyyy2);

        $selisih=$jd2-$jd1;
        $denda=$selisih*3000;
        echo "Besarnya denda adalah: Rp".$denda;
    }

    hitungDenda("2021-01-03","2021-01-05");
?>