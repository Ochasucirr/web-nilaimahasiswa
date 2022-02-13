<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<font face="Gravity-Book" style="color: #1d2656" size="4">

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="ico/favicon-16x16.png" sizes="16x16" />

    <title>Data Nilai Mahasiswa</title>
  </head>
  <body>

  <br>
 
        <h3 class="text-center">Data Nilai Mahasiswa Mata Kuliah Pemrograman Web Lanjut</h3>
        <hr>

<table class="tengah">
    <tr class="text-center">
        <th width="30">No</th>
        <th width="100">NPM</th>
        <th width="180">Nama</th>
        <th width="100">Kelas</th>
        <th width="100">Nilai</th>
        <th width="100">Grade</th>
        <th colspan="2" width="100">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from uts");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
        <td align='center'>$no</td>
        <td align='center'>$tampil[npm_nilai]</td>
        <td>$tampil[nama_nilai]</td>
        <td align='center'>$tampil[kelas_nilai]</td>
        <td align='center'>$tampil[uts_nilai]</td>
        <td align='center'>$tampil[huruf_nilai]</td>
        <td align='center'><a href='?kode=$tampil[npm_nilai]'>Hapus</a></td>
        <td align='center'><a href='nilai-ubah.php?kode=$tampil[npm_nilai]'>Ubah</a></td>
        </tr>";
        $no++;
    }
    ?>
</table>

<br>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<a href="index.php" type="button" class="btn btn-warning btn-lg px-2"><font face="Gravity-Book" style="color: #1d2656" size="4">Kembali</font></a>
<a href="nilai-tambah.php" type="button" class="btn btn-warning btn-lg px-2"><font face="Gravity-Book" style="color: #1d2656" size="4">Tambah Data Nilai</font></a>
</div>

<?php
if(isset($_GET['kode'])){
mysqli_query($koneksi,"delete from uts where npm_nilai='$_GET[kode]'");

echo "<h1 style='text-align:center; margin-top: 10px;'>Data Telah Terhapus</h1>";
echo "<meta http-equiv=refresh content=2;URL='nilai-data.php'>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
</font>