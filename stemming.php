<?php
require_once('Enhanced_CS.php');
?>
<?php
include "navbar1.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
</head>
<body background = "pexels-photo-235985.jpeg">
	
<center>
<h1>PENCARIAN KATA DASAR</h1>
<!--<a href="index1.php"><input type="button" value="Home"/></a>
<a href="upload.php"><input type="button" value="Upload File"/></a> 
<a href="hasil_tokenisasi.php"><input type="button" value="Hasil Tokenisasi"/></a>
<!--<a href="hitungbobot.php" ><input type="button" value="Hitung Bobot"/></a>
<a href="hitungvektor.php"><input type="button" value="Hitung Vektor"/></a>
<a href="query.php"><input type="button" value="Query Boolean"/></a>-->
<!--<a href="stemming.php"><input type="button" value="Stemming"/></a>-->
<br><br>
<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Submit"/>
</form>
</center>

<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>
</body>
</html>