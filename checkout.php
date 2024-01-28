<?php 

session_start();
include 'koneksi/koneksi.php';

if(empty($_SESSION['keranjang_belanja']) OR !isset($_SESSION['keranjang_belanja']))
{
   echo "<script>alert('keranjang kosong, silahkan belanja');</script>";
   echo "<script>location='produk.php';</script>"; 
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

    <section class="page-keranjang">
        <div class="container">
            <ul class="breadcrump">
                <li><a href="index.php">Beranda</a></li>
                <li>Keranjang Belanja</li>
            </ul>


            <div class="card">
               <div class="card-body">
                  <table class="table table-hover table-striped" id="tables">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Foto</th>
                             <th>Produk</th>
                             <th>Jumlah</th>
                             <th>Harga</th>
                             <th>Subtotal</th>
                         </tr>
                     </thead>
                      <tbody>
                        <?php 
                        $no = 1;
                        foreach ($_SESSION['keranjang_belanja'] as $id_produk => $jumlah):
                        $ambil = $koneksi->query("SELECT * FROM produk
                            WHERE id_produk='$id_produk' ");
                         $pecah = $ambil->fetch_assoc();
                         $subtotal = $pecah['harga_produk']*$jumlah;
                        ?>
                          <tr>
                              <td width="25px"><?php echo $no++; ?></td>
                              <td>
                                  <img src="./assets/foto_produk/<?php echo $pecah['foto_produk']; ?>" width="50">
                              </td>
                              <td><?php echo $pecah['nama_produk']; ?></td>
                              <td><?php echo $jumlah; ?></td>
                              <td>Rp<?php echo number_format($pecah['harga_produk']); ?></td>
                              <td>Rp<?php echo number_format($subtotal); ?></td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                  </table> 
               </div>   
            </div>

            <div class="row mt-3">
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <input type="text"class="form-control" value="<?php echo $_SESSION['pelanggan']['nama_pelanggan']; ?>" readonly>
                            <br>
                            <input type="text"class="form-control" value="<?php echo $_SESSION['pelanggan']['email_pelanggan']; ?>" readonly>
                            <br>
                            <input type="text"class="form-control" value="<?php echo $_SESSION['pelanggan']['telepon_pelanggan']; ?>" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="post">

                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Provinsi :</label>
                                <div class="col-sm-9">
                                    <select name="provinsi" class="form-control">
                                      
                                    </select>
                                </div>
                               </div> 

                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Distrik :</label>
                                <div class="col-sm-9">
                                    <select name="distrik" class="form-control">
                                      
                                    </select>
                                </div>
                               </div> 

                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Ekspedisi :</label>
                                <div class="col-sm-9">
                                    <select name="ekspedisi" class="form-control">
                                      
                                    </select>
                                </div>
                               </div> 

                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Paket :</label>
                                <div class="col-sm-9">
                                    <select name="paket" class="form-control">
                                      
                                    </select>
                                </div>
                               </div> 

                            </form>
                        </div>
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