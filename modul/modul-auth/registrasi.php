<?php
include('../../config/database.php');
if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $q = mysqli_query($con, "INSERT INTO `masyarakat` (nik, nama, username, password, telp, verifikasi) VALUES ('$nik', '$nama', '$username', '$password', $telp, 0)");
    if ($q) {
        echo  '<div class="alert alert-primary alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                Registrasi Berhasil harap Tunggu Verifikasi Oleh Admin
                </div>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section>
      <div class="color"></div>
      <div class="color"></div>
      <div class="color"></div>
      <div class="box">
        <div class="square" style="--i: 0"></div>
        <div class="square" style="--i: 1"></div>
        <div class="square" style="--i: 2"></div>
        <div class="square" style="--i: 3"></div>
        <div class="square" style="--i: 4"></div>
        <div class="container" style="height: 650px; margin: 10px">
          <div class="form">
            <h2>Registrasi</h2>
            <form action="" method="post">
                <div class="inputBox">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" placeholder="Masukan NIK anda">
                </div>
                <div class="inputBox">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                </div>
                <div class="inputBox">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                </div>
                <div class="inputBox">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                </div>
                <div class="inputBox">
                    <label>No.Telp</label>
                    <input type="number" name="telp" class="form-control" placeholder="Masukan Nomor telepon">
                </div>
                <div class="inputBox">
                <input name="simpan" type="submit">
                </div>
                <span class="text">Sudah Verifikasi? </span>Silahkan Masuk <a href="index.php">disini</a>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>