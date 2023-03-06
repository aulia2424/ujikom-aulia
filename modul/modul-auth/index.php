<?php
include('../../config/database.php');
if (isset($_POST['cek'])) {
    $pilihan = $_POST['pilihan']; 
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if ($pilihan == 'masyarakat') {
        $q = mysqli_query($con, "SELECT * FROM `masyarakat` WHERE username = '$username' AND password = '$password' AND verifikasi = 1");
        $r = mysqli_num_rows($q);
        if ($r == 1) {
            $d = mysqli_fetch_object($q);
            @session_start();
            $_SESSION['nik'] = $d->nik;
            $_SESSION['username'] = $d->username;
            $_SESSION['nama'] = $d->nama;
            $_SESSION['telp'] = $d->telp;
            $_SESSION['level'] = 'masyarakat';
            @header('location:../../modul/modul-profile/');
        } else {
            echo '<div class="alert alert-danger alert-dismissable" style="z-index: 909090"><a href="" class="close" data-dismiss="alert">x</a> <strong class="text-white">Data salah atau belum di verifikasi</strong></div>';
        }
    } else if ($pilihan == 'petugas') {
        $q = mysqli_query($con, "SELECT * FROM `petugas` WHERE username = '$username' AND password = '$password'");
        $r = mysqli_num_rows($q);
        if ($r == 1) {
            $d = mysqli_fetch_object($q);
            @session_start();
            $_SESSION['username'] = $d->username;
            $_SESSION['level'] = $d->level;
            $_SESSION['id_petugas'] = $d->id_petugas;
            @header('location:../../modul/modul-petugas/');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
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
        <div class="container" style="margin: 140px;">
          <div class="form">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="inputBox">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                </div>
                <div class="inputBox">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukan Password">              
                </div>
                <div class="inputBox">
                    <label for="pilihan" class="pilihan">Login Sebaai</label>
                    <select class="form-select" name="pilihan">
                        <option value="masyarakat">Masyarakat</option>
                        <option value="petugas">Petugas</option>
                    </select>     
                </div>
                <div class="inputBox">
                    <input name="cek" type="submit" value="login">
                </div>
                <p class="forget">Don't have an account ? <a href="registrasi.php">Registrasi</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>