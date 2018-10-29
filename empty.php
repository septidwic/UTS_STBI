<?php
  $host='localhost';
  $user='root';
  $pass='';
  $database='dbstbi';  
  $conn= new mysqli($host,$user,$pass,$database);    

$query1 = "DELETE FROM `dokumen` WHERE 1";
$query2= "DELETE FROM `upload` WHERE 1";
 
$hasil1 = mysqli_query ($conn, $query1);
$hasil2 = mysqli_query ($conn, $query2);

$files = glob('files/*.pdf'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
 }
 
echo "Data telah dihapus.";
?>
<br>
<a> Kembali ke tabel ? </a> <a href="hasil_tokenisasi.php"> YA </a>