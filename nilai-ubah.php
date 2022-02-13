<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from uts where npm_nilai='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>

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

    <title>Ubah Nilai Mahasiswa</title>
  </head>
  <body>

  <br>

  <h3 class="text-center">Data Nilai Mahasiswa Mata Kuliah Pemrograman Web Lanjut</h3>
        <hr>

<br>
<br>
<form action="" method="post">
    <table class="center">
        <tr>
            <td width="130">NPM</td>
            <td><input type="text" name="npm_nilai" readonly="readonly" value="<?php echo $data['npm_nilai']; ?>"> </td>
        </tr>
        <tr>
            <td width="130">Nama</td>
            <td><input type="text" name="nama_nilai" value="<?php echo $data['nama_nilai']; ?>"></td>
        </tr>
        <tr>
            <td width="130">Kelas</td>
            <td><input type="text" name="kelas_nilai"  value="<?php echo $data['kelas_nilai']; ?>"></td>
        </tr>
        <tr>
            <td width="130">Nilai</td>
            <td><input type="text" name="uts_nilai" value="<?php echo $data['uts_nilai']; ?>"></td>
        </tr>
        <tr>
            <td width="130">Grade</td>
            <td><input type="text" name="huruf_nilai" value="<?php echo $data['huruf_nilai']; ?>"></td>
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
</div>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update uts set
    nama_nilai = '$_POST[nama_nilai]',
    kelas_nilai = '$_POST[kelas_nilai]',
    uts_nilai = '$_POST[uts_nilai]',
    huruf_nilai = '$_POST[huruf_nilai]'
    where npm_nilai = '$_GET[kode]'");

    echo "<h1 style='text-align:center; margin-top: 10px;'>Nilai Telah Diubah</h1>";
    echo "<meta http-equiv=refresh content=1;URL='nilai-data.php'>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
</font>