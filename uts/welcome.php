<?php
session_start();

$_SESSION['lives'] = 5;
$_SESSION['score'] = 0;
?>
Hallo <?php echo $_COOKIE["Nama"]; ?>, Selamat datang kembali di permainan ini!!!
<form action="game.php" method="post">
    <input type="submit" value="Start Game">
</form>
Bukan anda? <a href="logout.php">(klik di sini)</a>