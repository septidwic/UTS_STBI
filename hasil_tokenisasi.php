
<?php
//membuat koneksi ke database
        $host="localhost";
        $user="root";
        $pass="";
        $database="dbstbi";

$conn= new mysqli($host,$user,$pass,$database);
?>
<?php
include "navbar1.php";
?><br>
<br>
<body background ="pexels-photo-235985.jpeg">
 
<center>
<a href="upload.php"><input type="button" value="Upload File"/></a> or <a href="index1.php""><input type="button" value ="Home"/></a><br>
<a>Kosongkan Tabel : </a> <a href="empty.php"><input type="button" value="KOSONGKAN"/></a>
<br>
<br>
HASIL TOKENISASI DAN STEMMING
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter </th>
    <th> Stemming Nazief Adriani</th>
    
</tr>

<?php  
        //$host="localhost";
        //$user="root";
        //$pass="";
        //$database="dbstbi";
     //$conn= new mysqli($host,$user,$pass,$database);

// Perintah untuk menampilkan data
$query="Select * From dokumen" ;  //menampikan SEMUA
$hasil= Mysqli_query ($conn, $query);    //fungsi untuk SQL
// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil, MYSQLI_ASSOC))

{
$id =$data['dokid'];
 echo "   
        <tr>
        <td>".$data['nama_file']."</td>
        <td>".$data['token']."</td>
        <td>".$data['tokenstem']."</td>
        <td>".$data['tokenstem']."</td>
        
        </tr> 
        ";
        
}

?>

</table>
</body>