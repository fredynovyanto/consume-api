<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

  <title><?php echo $judul; ?>
  </title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sekolahku</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php if ($judul == 'Halaman Home'): ?>
            <li class="nav-item active">
            <?php else :?>
              <li class="nav-item">
            <?php endif ?>
                <a class="nav-link" href="<?= base_url(); ?>index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>
            
            <?php if ($judul == 'Daftar Siswa' || $judul == 'Form Tambah Data Siswa'): ?>
            <li class="nav-item active">
            <?php else :?>
              <li class="nav-item">
            <?php endif ?>
                <a class="nav-link" href="<?= base_url(); ?>siswa/">
                  <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Siswa</span></a>
            </li>

            <?php if ($judul == 'Daftar Guru' || $judul == 'Form Tambah Data Guru'): ?>
            <li class="nav-item active">
            <?php else :?>
              <li class="nav-item">
            <?php endif ?>
                <a class="nav-link" href="<?= base_url(); ?>guru/">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Guru</span></a>
            </li>

            <?php if ($judul == 'Daftar Karyawan' || $judul == 'Form Tambah Data Karyawan'): ?>
            <li class="nav-item active">
            <?php else :?>
              <li class="nav-item">
            <?php endif ?>
                <a class="nav-link" href="<?= base_url(); ?>karyawan/">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Karyawan</span></a>
            </li>

            <?php if ($judul == 'Daftar Kelas' || $judul == 'Form Tambah Data Kelas'): ?>
            <li class="nav-item active">
            <?php else :?>
              <li class="nav-item">
            <?php endif ?>
                <a class="nav-link" href="<?= base_url(); ?>kelas/">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Kelas</span></a>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url(); ?>assets/img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<!--
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">CI App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?= base_url(); ?>">Home
            <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
          <a class="nav-item nav-link" href="#">About</a>
        </div>
      </div>
    </div>
  </nav>-->