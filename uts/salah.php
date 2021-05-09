<?php session_start();?>
Hello <?php echo $_COOKIE["Nama"]; ?>, sayang jawaban Anda salah… tetap semangat ya !!!<br>
Lives: <?php echo $_SESSION['lives']; ?> | Score: <?php echo $_SESSION['score'];?><br>
<a href="game.php" > Soal selanjutnya </a>
