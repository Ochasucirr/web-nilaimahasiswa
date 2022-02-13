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

    <title>Akses Dosen</title>
  </head>
  <body>

  <br>

  <h3 class="text-center">Tambah Data Nilai Mahasiswa Mata Kuliah Pemrograman Web Lanjut</h3>
  <hr>

<form action="" method="post">
    <table class="center">
        <tr>
            <td width="50">NPM</td>
            <td><input type="text" name="npm_nilai"></td>
        </tr>
        <tr>
            <td width="50">Nama</td>
            <td><input type="text" name="nama_nilai"></td>
        </tr>
        <tr>
            <td width="50">Kelas</td>
            <td><input type="text" name="kelas_nilai"></td>
        </tr>
        <tr>
            <td width="50">Nilai</td>
            <td><input type="text" name="uts_nilai"></td>
        </tr>
        <tr>
            <td width="50">Grade</td>
            <td><input type="text" name="huruf_nilai"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses" class="btn btn-warning btn-sm px-02"></td>
        </tr>
    </table>
</form>


<br>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<a href="index.php" type="button" class="btn btn-warning btn-lg px-2"><font face="Gravity-Book" style="color: #1d2656" size="4">Kembali</font></a>
<a href="nilai-data.php" type="button" class="btn btn-warning btn-lg px-2"><font face="Gravity-Book" style="color: #1d2656" size="4">Lihat Data Nilai</font></a>
</div>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    $query = "SELECT * FROM uts WHERE npm_nilai = $_POST[npm_nilai]";

        $cek = mysqli_query($koneksi, $query);
        $itung = mysqli_num_rows($cek);
        if($itung == 1){
            echo "<h1 style='text-align:center; margin-top: 10px;'>NPM sudah ada</h1>";
            echo "<meta http-equiv=refresh content=2;URL='nilai-data.php'>";
        }
        else{
            mysqli_query($koneksi,"insert into uts set
            npm_nilai = '$_POST[npm_nilai]',
            nama_nilai = '$_POST[nama_nilai]',
            kelas_nilai = '$_POST[kelas_nilai]',
            uts_nilai = '$_POST[uts_nilai]',
            huruf_nilai = '$_POST[huruf_nilai]'");

            echo "<h1 style='text-align:center; margin-top: 10px;'>Data Telah Tersimpan</h1>";
            // "Data telah tersimpan";
            
            echo "<meta http-equiv=refresh content=2;URL='nilai-data.php'>";
        }
 }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
</font>