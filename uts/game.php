<?php session_start();?>
Hello <?php echo $_COOKIE['Nama'];?>, tetap semangat ya.. you can do the best!!<br>
Lives : <?php echo $_SESSION['lives']; ?> | Score : <?php echo $_SESSION['score'] ?>

<?php
$angka1 = random_int(0,20);
$angka2 = random_int(0,20);

setcookie("angka1",$angka1);
setcookie("angka2",$angka2);

?>

<form action="proses_game.php" method="post">
    Berapakah <?php echo $angka1;?> + <?php echo $angka2;?> = 
    <input name="jawaban" type="text">
    <input type="submit" value="Submit">
</form>