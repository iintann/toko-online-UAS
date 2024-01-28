<?php 

session_start();
include '../koneksi/koneksi.php';

$id_pelanggan = $_SESSION['pelanggan']['id_pelanggan'];

$ambil = $koneksi->query("SELECT * FROM pelanggan
    WHERE id_pelanggan='$id_pelanggan'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Profil</title>
	<link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

	<nav class="navbar sticky-top">

        <a href="../index.php" class="navbar-logo">Toko<span>Online</span></a>

        <div class="navbar-menu">
            <a href="../index.php">Beranda</a>
            <a href="#">Tentang Kami</a>
            <a href="../produk.php">Produk</a>
            <a href="#">Kontak</a>
        </div>


        <div class="navbar-icon">
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="../keranjang.php"><i class="fas fa-shopping-cart"></i></a>
            <a href="#" id="btn-user"><i class="fas fa-user"></i></a>
            <a href="#" id="btn-menu"><i class="fas fa-bars"></i></a>
        </div>

        <div class="user">
            <li><a href="index.php">Profil</a></li>
            <li><a href="../logout.php">Logout</a></li> 
        </div>

    </nav>

    <section class="page-profil">
        <div class="container">
            <ul class="breadcrump">
                <li><a href="../index.php">Beranda</a></li>
                <li>Profil</li>
            </ul>


            <div class="row">

              <div class="col-md-3">

                <div class="card"> 

                   <div class="card-header">
                      <div class="img">
                          <img src="../assets/foto_pelanggan/<?php echo $pecah['foto_pelanggan']; ?>" class="rounded-circle rounded mx-auto d-block" width="150">
                      </div>
                      <div class="card-title">
                         <h2><?php echo $pecah['nama_pelanggan']; ?></h2> 
                      </div> 
                   </div> 

                   <div class="card-body">
                       
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                           <a href="index" class="nav-link">Home</a> 
                        </li>
                        <li class="nav-item">
                           <a href="index.php?page=pesanan" class="nav-link">
                           Pesanan</a> 
                        </li>
                        <li class="nav-item">
                           <a href="index.php?page=riwayat" class="nav-link">
                           Riwayat</a> 
                        </li>
                    </ul>


                   </div>


                </div>
                 
              </div> 

              <div class="col-md-9">

                <div class="card">
                   <div class="card-body">
                       
                    <?php 

                    if(isset($_GET['page']))
                    {

                    }
                    else
                    {
                        include 'home.php';
                    }

                    ?>


                   </div>
                </div>
                  
              </div> 

            </div>


        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">

                <div class="col-4">
                    <h3>Halaman Utama</h3>
                    <ul class="footer-menu">
                        <li><a href="../index.php">Beranda</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="../produk.php">Produk</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-4">
                    <h3>Hubungi Kami</h3>
                    <ul class="footer-kontak">
                        <b><i class="fas fa-store"></i> Toko Online</b>
                        <br><i class="fas fa-city"></i> 
                        Medan
                        <br><i class="fas fa-map-marker-alt"></i> Helvetia,Tanjung Gusta
                        <br><i class="fas fa-phone"></i> 081397422708
                        <br><i class="fas fa-envelope"></i> intan@gmail.com
                        <br><i class="fas fa-user"></i> Intan Purnama
                    </ul>
                </div>

                <div class="col-4">
                    <h3>Sosial Media Kami</h3>
                    <ul class="footer-social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>  
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>

    <div class="created">
        <p>Created By <a href="#">Intan Purnama Sari Zalukhu</a>. | &copy; 2024</p>
    </div>


	<!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>
    <script src="../assets/js/owl-carousel.min.js"></script>

    <!-- kita buat js buat tombol btn-menu -->
    <script src="../assets/js/main.js"></script>

</body>
</html>