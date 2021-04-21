<h3>DATA UKURAN TABUNG</h3>
<table border=1>
    <tr>
        <td>NAMA TABUNG</td>
        <td>DIAMETER</td>
        <td>TINGGI</td>
        <td>LUAS</td>
    </tr>
    <?php
        $namaFile="datatabung.dat";
        $myfile=fopen($namaFile,"r") or die("Tidak bisa buka file");
        while(!feof($myfile)){
            $data=fgets($myfile);
            $exp=explode(",",$data);
            $nama=$exp[0];
            $dia=$exp[1];
            $tinggi=$exp[2];
            $view="hitungluas.php?nama=$nama&dia=$dia&tinggi=$tinggi";
            echo "<tr><td>$nama</td><td>$dia</td><td>$tinggi</td><td><a href=$view>view</a></td></tr>";
        }
        fclose($myfile);
    ?>
</table>