<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "penjumlahan";

$nama = $_COOKIE['Nama'];
$email =  $_COOKIE['Email'];
$skor = $_SESSION['score'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO user (username, email, skor) VALUES ('".$nama."', '".$email."', ".$skor.")";
mysqli_query($conn, $sql);

$sqlres = "SELECT username, email, skor FROM user ORDER BY skor DESC LIMIT 10 ";
$result = mysqli_query($conn, $sqlres);

if (mysqli_num_rows($result) > 0) {
    echo "
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            padding : 0px 10px;
        }
    </style>
    ";

    $x = 1;
    echo "<table>";
    echo "<tr><td>No.</td><td>Nama</td><td>Skor</td></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
            echo "<td>".$x++."</td>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["skor"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
<br>
Hello <?php echo $nama; ?>… Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.<br>
Score Anda : <?php echo $skor;?><br>
<a href="welcome.php" > Main Lagi </a>
