<?php 
session_start();
include 'koneksi/koneksi.php';


if(isset($_GET['idkategori']))
{
    $id_kategori = $_GET['idkategori'];

    $kategori_produk = array();

    $ambil = $koneksi->query("SELECT * FROM produk JOIN kategori
    ON produk.id_kategori=kategori.id_kategori 
    WHERE produk.id_kategori='$id_kategori' LIMIT 9");

    while($pecah = $ambil->fetch_assoc())
    {
        $kategori_produk[]=$pecah;
    }
}
else
{
    $produk = array();

    $ambil = $koneksi->query("SELECT * FROM produk JOIN kategori
    ON produk.id_kategori=kategori.id_kategori LIMIT 9");

    while($pecah = $ambil->fetch_assoc())
    {
        $produk[]=$pecah;
    }
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Produk</title>
	<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<?php include 'include/navbar.php'; ?>

    <section class="page-produk">
        <div class="container">
            <ul class="breadcrump">
                <li><a href="index.php">Beranda</a></li>
                <li>Produk</li>
            </ul>


            <div class="row">

              <div class="col-md-3">
                 <?php include 'include/sidebar.php'; ?>
              </div> 

              <div class="col-md-9">

                  <div class="card-box">
                      <div class="card-body">
                          <h2>Produk Kami</h2>
                        <p>
                          Paragraf atau alinea adalah suatu gagasan yang berbentuk serangkaian kalimat yang saling berkaitan satu sama lain. Nama lain dari paragraf ialah wacana mini. 
                        </p>
                      </div>
                  </div>

                <div class="row">

                   <?php if(isset($_GET['idkategori'])): ?> 
                    <?php foreach ($kategori_produk as $key => $value): ?>
                    <div class="col-md-4 card-produk">
                <div class="card">
                    <img src="assets/foto_produk/<?php echo $value['foto_produk']; ?>">
                    <div class="card-body content">
                        <h5><?php echo $value['nama_produk']; ?></h5>
                        <p>Rp<?php echo number_format ($value['harga_produk']); ?></p>
                        <a href="beli.php?idproduk=<?php echo $value['id_produk']; ?>" class="btn btn-success">
                            <i class="fas fa-shopping-cart"></i> Keranjang
                        </a>
                        <a href="detail_produk.php?idproduk=<?php echo $value['id_produk']; ?>" class="btn btn-success">
                            <i class="fas fa-eye"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

                   <?php else: ?>

                <?php foreach ($produk as $key => $value): ?>
                <div class="col-md-4 card-produk">
                <div class="card">
                    <img src="assets/foto_produk/<?php echo $value['foto_produk']; ?>">
                    <div class="card-body content">
                        <h5><?php echo $value['nama_produk']; ?></h5>
                        <p>Rp<?php echo number_format ($value['harga_produk']); ?></p>
                        <a href="beli.php?idproduk=<?php echo $value['id_produk']; ?>" class="btn btn-success">
                            <i class="fas fa-shopping-cart"></i> Keranjang
                        </a>
                        <a href="detail_produk.php?idproduk=<?php echo $value['id_produk']; ?>" class="btn btn-success">
                            <i class="fas fa-eye"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

        <?php endif; ?>

            </div>


              </div> 

            </div>


        </div>
    </section>


    <?php include 'include/footer.php'; ?>


	<!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
    <script src="assets/js/owl-carousel.min.js"></script>

    <!-- kita buat js buat tombol btn-menu -->
    <script src="assets/js/main.js"></script>

</body>
</html>