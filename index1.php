<?php
require_once('Enhanced_CS.php');
include "connect.php";

function tanggal_indo($tanggal, $cetak_hari = true)
    {
    $hari = array ( 1 =>    'Senin',
                'Selasa',
                'Rabu',
                'Kamis',
                'Jumat',
                'Sabtu',
                'Minggu'
            );
            
    $bulan = array (1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
    $split    = explode('-', $tanggal);
    $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    
    if ($cetak_hari) {
        $num = date('N', strtotime($tanggal));
        return $hari[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
    }
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
<h1>Dokumen PN-PT-MA</h1>
<br/> <br/> <br/>

					<table id="rowhover" class="isi">
            <tr>`
            <th>
                Nama File
            </th>
            <th>
                Deskripsi Putusan
            </th>
            
            <th>
                Unduhan File
            </th>
            <th>
                Tanggal Upload
            </th>
        </tr>
<?php
            $query = "SELECT nama_file,deskripsi,tgl_upload FROM upload ORDER BY tgl_upload DESC ";
            $sql = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_array($sql)) {
                //$target_dir = "https://mibrahimua.000webhostapp.com/konten/";
                $target_dir = "https://alfaizsepti.000webhostapp.com/files/";
                $target_file = $target_dir . $data['nama_file'];
?>
<tr>
                 
                     <td align="center">
                        <?php echo $data['nama_file']; ?>
                    </td>
                    <td align="center">
                        <?php echo $data['deskripsi']; ?>
                    </td>
                    <td align="center">
                        <a href="<?php echo $target_file;?>">Unduh</a>
                    </td>
                    <td align="center">
                        <?php
                        $tgl = explode(" ", $data['tgl_upload']);   
                        $tanggal = tanggal_indo($tgl[0]); 
                        echo $tanggal;
                        ?>
                    </td>
                </tr>
                    <?php
            }
            ?>

        
        </table>


</br>
</br>
</br>
</br>
</br>
</br>
</br>


<marquee> <h2>Program untuk mengunggah file dengan format pdf , tokenisasi dan stemming</h2>
</marquee>
<br>
<br><br>
<center><h3>Muhammad  Alfaiz 15.01.53.0084</h3></center>
<center><h3>Septi Dwi Cahyanti 15.01.53.0114</h3></center>
<center><h3>Arif Rahmat 15.01.53.0119</h3></center>


</body>
</html>