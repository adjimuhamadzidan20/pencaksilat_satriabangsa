<?php  
  require 'config/koneksi_db.php';
  session_start();

  if (isset($_SESSION['login_dashboard'])) {
    header('Location: index.php');
    exit;
  }

  if (isset($_POST['daftar'])) {
    $nama = htmlspecialchars(stripcslashes($_POST['nama']));
    $username = htmlspecialchars(stripcslashes($_POST['username']));

    // validasi username
    $cek_user = "SELECT * FROM dt_admin WHERE username = '$username'";
    $query = mysqli_query($koneksi, $cek_user);
    $result = mysqli_fetch_assoc($query);

    if ($result) {
      echo "<script>
          alert('Username sudah ada yang menggunakan!');
          window.location.assign('register.php');
        </script>";

      return false;
    }

    // validasi password
    $password = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['password']));
    $confirmPass = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['konfirmasi']));

    if ($password !== $confirmPass) {
      echo "<script>
          alert('Password yang anda masukan tidak sesuai!');
          window.location.assign('register.php');
        </script>";

      return false;
    }

    // enkripsi password
    $enkripsi = password_hash($password, PASSWORD_DEFAULT);

    $terms = $_POST['terms'];
    if ($terms == 'agree') {
      $sql = "INSERT INTO dt_admin VALUES ('', '$nama', '$username', '$enkripsi')";
      mysqli_query($koneksi, $sql);

      echo "<script>
          alert('Pendaftaran berhasil!');
          window.location.assign('login.php');
        </script>";
    }
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Satria Bangsa | Daftar Akun</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <h1 class="text-lg">PENCAK SILAT <b>SATRIA BANGSA</b></h1>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <div class="text-center mb-3">
        <img src="logo/pencaksilat.png" width="80" height="80">
      </div>  

      <p class="login-box-msg">Mendaftar Akun Baru</p>

      <form method="post" class="mb-2">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Anda" name="nama" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirm Password" name="konfirmasi" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the terms
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-dark btn-block" name="daftar">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-0 mt-4 text-center">
        <a href="login.php">Sudah Memiliki Akun</a>
      </p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>

</body>
</html>