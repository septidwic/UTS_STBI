<?php
include "navbar1.php";
?>
<br>
<br>
<html>
<title>Aplikasi Download</title>
<center>
<body background = "musik.jpg">
<?php
$host='localhost';
$user='root';
$pass='';
$database='dbstbi';
$conn= new mysqli($host,$user,$pass,$database) or die('MySql Tidak Connect');
 

  $query = "SELECT * FROM upload ORDER BY id_upload DESC";
  $hasil = mysqli_query($conn, $query);

  while ($r = mysqli_fetch_array($hasil)){
    echo "Nama File : <b>$r[nama_file]</b> <br>";
    echo "Deskripsi : $r[deskripsi] <br>";
    echo "<a href=\"files/$r[nama_file]\">Download File</a><hr><br>";
  }
?>