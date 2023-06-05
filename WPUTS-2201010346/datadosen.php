<?php
include("konfigurasi.php");

$jdpage = "List";
$pg = "dosen/dosenlist.php";
$footer = "";

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

if (isset($_POST["act"])) {
  $act = $_POST["act"];
  switch ($act) {
    case "store":
      $nama = $_POST["txNAMA"];
      $nidn = $_POST["txNIDN"];
      $gelar = $_POST["txGELAR"];
      $dapartemen = $_POST["txDAPARTEMEN"];
      $iddosen = md5($nidn);
      $sql = "INSERT INTO tbdosen(nama, nidn, gelar, dapartemen, iddosen) VALUES('$nama', '$nidn', '$gelar','$dapartemen', '$iddosen');";
      $hasil = mysqli_query($cnn, $sql);
      if ($hasil) {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data dosen berhasil ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      } else {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data dosen gagal ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      }

      break;
    case "update":
      $nama = $_POST["txNAMA"];
      $nidn = $_POST["txnidn"];
      $gelar = $_POST["txGELAR"];
      $dapartemen = $_POST["txDAPARTEMEN"];
      $iddosen = $_POST["iddosen"];
      $sql = "UPDATE tbdosen SET nama='$nama', nidn='$nidn', gelar='$gelar', dapartemen='$dapartemen' WHERE iddosen='$iddosen';";
      $hasil = mysqli_query($cnn, $sql);
      if ($hasil) {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data dosen berhasil diperbaharui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      } else {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data dosen gagal diperbaharui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      }

      break;
    case "destroy":
      $iddosen = $_POST['iddosen'];
      $sql = "DELETE FROM tbdosen WHERE iddosen='$iddosen';";
      $hasil = mysqli_query($cnn, $sql);
      if ($hasil) {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data dosen berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      } else {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data dosen gagal dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      }
      break;
  }
}

if (isset($_GET["aksi"])) {
  $aksi = $_GET["aksi"];
  switch ($aksi) {
    case "new":
      $jdpage = "Tambah";
      $pg = "dosen/dosennew.php";
      break;
    case "edit":
      $jdpage = "Ubah";
      $pg = "dosen/dosenedit.php";
      break;
    case "del":
      $jdpage = "Hapus";
      $pg = "dosen/dosendel.php";
      break;
    default:
      $jdpage = "List";
      $pg = "dosen/dosenlist.php";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css.map">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <title><?= $jdpage ?> - Data Mahasiswa</title>
</head>

<body>

<style>
  body {
   background-color: lightblue;
  }

</style>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="datamahasiswa.php">DataMahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datamatkul.php">DataMatakuliah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="datadosen.php">DataDosen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="datauser.php">DataUser</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container konten">
      <?php
      include($pg);
      ?>
    </div>
  </div>


  <!--[if !IE]>-->
  <script src="assets/jquery/jquery-3.6.1.min.js"></script>
  <!--<![endif]-->

  <!--[if IE]>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <![endif]-->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?= $footer; ?>
</body>

</html>