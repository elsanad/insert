<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <ul>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container px-10">
                <h1 class="logo me-auto me-lg-0"><a href="index.html"><span>Lapor Pak!</span></a></h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Form Section ======= -->
                    
        <?php
              include_once('koneksi.php');
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $tgl_pengaduan = date("Y-m-d"); // Ambil tanggal saat ini
    $isi_laporan = $_POST['isi_laporan'];

    // Simpan data ke tabel masyarakat
    $queryMasyarakat = "INSERT INTO masyarakat (nik, nama, telp) VALUES ('$nik', '$nama', '$telp')";
    mysqli_query($koneksi, $queryMasyarakat);

    // Ambil ID pengaduan yang baru ditambahkan
    $id_pengaduan = mysqli_insert_id($koneksi);

    // Simpan data ke tabel pengaduan
    $queryPengaduan = "INSERT INTO pengaduan (nik, tgl_pengaduan, isi_laporan) VALUES ('$nik', '$tgl_pengaduan', '$isi_laporan')";
    mysqli_query($koneksi, $queryPengaduan);

    // Redirect atau lakukan tindakan lain setelah berhasil menyimpan
    header("Location: dashboard_masyarakat.php");
    exit();
}
?>

        <!-- Page content-->
        <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <h1 class="fw-bolder">PORTAL PENGADUAN MASYARAKAT</h1>
                            <p class="lead fw-normal text-muted mb-0">Form Pengaduan Masyarakat</p>
                        </div>
        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form action="#" data-sb-form-api-token="API_TOKEN" method="POST">
                                    <!-- NIK input with person icon -->
                                    <div class="form-group">
                                        <label><b>NIK</b></label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input type="text" class="form-control" placeholder="Masukkan NIK anda" name="nik" required>
                                        </div>
                                    </div>

                                    <!-- Nama input with person icon -->
                                    <div class="form-group">
                                        <label><b>Nama</b></label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input type="text" class="form-control" placeholder="Masukkan nama anda" name="nama" required>
                                        </div>
                                    </div>

                                    <!-- No telepon input with person icon -->
                                    <div class="form-group">
                                        <label><b>No Telepon</b></label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                            <input type="text" class="form-control" placeholder="Masukkan no telepon anda" name="telp" required>
                                        </div>
                                    </div>

                                    <!-- Tanggal Pengaduan input with calendar icon -->
                                    <div class="form-group">
                                    <label><b>Tanggal Pengaduan</b></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                        <input type="date" class="form-control" placeholder="" name="tgl_pengaduan" id="tglPengaduan">
                                    </div>
                                </div>
                                <script>
                                    // JavaScript code to set the default value to today's date
                                    document.getElementById('tglPengaduan').valueAsDate = new Date();
                                </script>

                                    <!-- Isi input with chat-text icon -->
                                    <div class="form-group">
                                        <label><b>Isi Laporan</b></label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-chat-text"></i></span>
                                            <textarea class="form-control" placeholder="Masukkan laporan anda" name="isi_laporan" rows="5" required></textarea>
                                        </div>
                                    </div>

                                        <!-- Add some space between the input and buttons -->
                                    <div class="mb-3"></div>

                                    <!-- Center the buttons using text-center class -->
                                    <div class="text-center">
                                        <button type="submit" name="ok" class="btn btn-warning fw-bold">Simpan</button>
                                        <a href="index.php" class="btn btn-secondary fw-bold">Kembali</a>
                                    </div>
                                
                                        <div class="text-center mb-3">
                                            <br />
                                            <a href="laporan.php" class="btn btn-danger">Lihat Pengaduan Lainnya</a>
                                        </div>
                                    
                                </form>
                            </div>
                        </div>
        </main>

        </div>

      </div>
    </section><!-- End Form Section -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>