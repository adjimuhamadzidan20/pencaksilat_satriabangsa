<!-- Left navbar links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
  </li>
  <!-- <li class="nav-item d-none d-sm-inline-block">
    <a href="index3.html" class="nav-link">Home</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Contact</a>
  </li> -->
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
  <div class="user-panel d-flex">
    <div class="image">
      <img src="logo/user.png" class="img-circle" alt="Admin_Picture" style="width: 30px;">
    </div>
    <div class="info">
      <a href="#" class="text-secondary d-block" style="font-size: 15px;">
        <?php echo strtoupper($_SESSION['nama']); ?> | <?php echo $_SESSION['status']; ?>
      </a>
    </div>
  </div>
</ul>