<?php  
  require 'config/koneksi_db.php';
  session_start();

  // mencegah masuk ke hal dashboard (index) via url
  if (isset($_SESSION['login_dashboard'])) {
    header('Location: index.php');
    exit;
  }

  // cek cookie
  if (isset($_COOKIE['ID']) AND isset($_COOKIE['KEY'])) {
    $cookie_id = $_COOKIE['ID'];
    $cookie_key = $_COOKIE['KEY'];

    $sql = "SELECT * FROM dt_admin WHERE id_admin = $cookie_id";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($query);

    if ($cookie_key == hash('sha256', $data['username']) AND $cookie_id == hash('sha256', $data['id_admin'])) {
      $_SESSION['login_dashboard'] = true;
    }
  }

  if (isset($_POST['masuk'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $sql = "SELECT * FROM dt_admin WHERE username = '$username'";
    $query = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($query) === 1) {
      $hasil = mysqli_fetch_assoc($query);
      // mencocokkan password
      if (password_verify($password, $hasil['password'])) {
        $_SESSION['nama'] = $hasil['nama'];
        $_SESSION['status'] = 'ADMIN';
        $_SESSION['login_dashboard'] = true;

        if ($_POST['remember']) {
          setcookie('ID', hash('sha256', $hasil['id_admin']), time()+60);
          setcookie('KEY', hash('sha256', $hasil['username']), time()+60);
        }

        header('Location: index.php');
        exit;
      }
    } 
    else {
      echo "<script>
          alert('Username atau password tidak sesuai!');
        </script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Satria Bangsa | Log in</title>
  <link rel="icon" type="image/x-icon" href="logo/pencaksilat.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

  <style type="text/css">
    body {
      background-image: url(img/background.jpg);
      background-size: cover;
      background-position: center;
    }
  </style>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <h1 class="text-lg text-white">PENCAK SILAT <b>SATRIA BANGSA</b></h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="text-center mb-3">
        <img src="logo/pencaksilat.png" width="80" height="80">
      </div>  
      
      <p class="login-box-msg">Masuk Untuk Memulai</p>

      <form method="post">
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">Remember Me</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-dark btn-block" name="masuk">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-0 mt-4 text-center">
        <a href="register.php">Mendaftar Akun Baru</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>

</body>
</html>