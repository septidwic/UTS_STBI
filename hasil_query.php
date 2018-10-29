<html>
<head>
	<title>Hasil Query</title>
</head>
<center>
<body background = "pexels-photo-235985.jpeg">
<br>
<br>
<br>
<br>
<?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$host="localhost";
$user="root";
$pass="";
$database="dbstbi";
$katakunci="";
// Create connection
$conn = new mysqli($host,$user,$pass,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=@$_POST['$katakunci'];
$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` where token like '%$hasil%'";
//$sql = "SELECT distinct nama_file,token,tokenstem,tokenstem2 FROM `dokumen` WHERE MATCH (token,tokenstem,tokenstem2) AGAINST ('$hasil' IN BOOLEAN MODE)";

echo $sql;
$result = $conn->query($sql);

if (@$result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nama file: " . $row["nama_file"]. " - Token: " . $row["token"]. " " . $row["tokenstem"]. " " .$row["tokenstem"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
///
?>
<br>
<a href="index1.php"><input type="button" value="Kembali"/></a>
</center>
</body>
</html>
