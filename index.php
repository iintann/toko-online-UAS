<?php 
session_start();
include 'koneksi/koneksi.php';

$produk = array();

$ambil = $koneksi->query("SELECT * FROM produk JOIN kategori
	ON produk.id_kategori=kategori.id_kategori LIMIT 8");

while($pecah = $ambil->fetch_assoc())
{
	$produk[]=$pecah;
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Online</title>
	 <!-- Custom fonts -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<!-- navbar start -->
	<?php include 'include/navbar.php';?>
	<!-- navbar end -->


	<!-- hero section start -->
	<section class="hero">
		<div id="owl-nav"></div>
		<div class="owl-carousel owl-theme">

			<div class="item">
				<img src="assets/foto/banner3.jpg" width="1300px">
				<main class="content">
					<h1>Toko <span>Online</span></h1>
					<p>
						Segera dapatkan koleksi Terbaru produk kami!
						Persediaan stok terbatas. 
					</p>
					<a href="#" class="btn btn-primary">Beli Sekarang</a>
				</main>
			</div>

		</div>
	</section>
	<!-- hero section end -->

	<div class="container">
	<!-- about section start -->
	<section class="about">
		<h2 class="judul"><span>Tentang</span> Kami</h2>
		<div class="row">
			<div class="col-md-6 about-img">
				<img src="assets/foto/banner2.jpg">
			</div>
			<div class="col-md-6 content">
				<h3>Kenapa Memilih Produk Kami?</h3>
				<p>Kami tawarkan pengalaman berbelanja luar biasa dengan produk berkualitas tinggi:
				</p>
				 <p>1. <b>Kualitas Terjamin:</b> Produk dipilih dengan ketat untuk kualitas terbaik. <br>
					2. <b>Tren Terkini:</b> Koleksi selalu up-to-date sesuai tren fashion. <br>
					3. <b>Pilihan Luas:</b> Berbagai produk fashion sesuai semua gaya. <br>

					Pilih produk kami untuk kualitas, gaya, dan kepercayaan. Sambut gaya hidup Anda dengan koleksi fashion kami yang unik dan inspiratif</p>
			</div>
		</div>
	</section>
	<!-- about section end -->

	<!-- produk section start -->
	<section class="produk">
		<h2 class="judul"><span>Produk</span> Kami</h2>
		<div class="row">

			<?php foreach ($produk as $key => $value): ?>
				<div class="col-md-3">
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
			

		</div>
	</section>
	<!-- produk section end -->


	<!-- kontak section start -->
	<section class="kontak">
		<h2 class="judul"><span>Kontak</span> Kami</h2>
		<div class="row">
			
			<div class="col-md-6 kontak-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254832.50533277486!2d98.50467471229808!3d3.6426141489208175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1706113462077!5m2!1sid!2sid"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-md-6 kontak-form">
				<form method="post">
					<div class="card">
						<div class="card-body">
							

							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Nama Legkap :</label>
								<div class="col-sm-8">
									<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap Anda" required>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label">E-mail :</label>
								<div class="col-sm-8">
									<input type="email" name="email" class="form-control" placeholder="Masukan E-mail Anda" required>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label">No Telp :</label>
								<div class="col-sm-8">
									<input type="number" name="telepon" class="form-control" placeholder="Masukan Nomor Telepon Anda" required>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Pesan :</label>
								<div class="col-sm-8">
									<textarea type="text" name="pesan" class="form-control" placeholder="Masukan Pesan Anda" required></textarea>
								</div>
							</div>

							<div class="text-right">
								<button name="kirim" class="btn btn-success">Kirim</button>
							</div>


						</div>
					</div>
				</form>
			</div>


		</div>
	</section>

	<!-- kontak section end -->

	</div>


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