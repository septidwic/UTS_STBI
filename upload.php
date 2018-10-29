<?php
include "navbar1.php";
?>
<html>
<title>Form Upload</title>
<body background = "pexels-photo-235985.jpeg">
<br>
<br>
<br>
<br>
<br>
<br>
<center> 
<h1> Silahkan Upload Dokumen (PDF) </h1>   
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br><br>
<br>
<input type=submit value=Upload>
<a href="index1.php"><input type="button" value="<< Kembali"/></a>
</form>
</center>
</body>
</html>