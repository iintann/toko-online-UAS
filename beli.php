<?php 

session_start();

$id_produk = $_GET['idproduk'];

if(isset($_SESSION['keranjang_belanja'][$id_produk]))
{
	$_SESSION['keranjang_belanja'][$id_produk]+=1;
}
else
{
	$_SESSION['keranjang_belanja'][$id_produk]=1;
}

// echo "<pre>";
// print_r($_SESSION['keranjang_belanja']);
// echo "</pre>";

echo "<script>alert('produk berhasil masuk ke keranjang');</script>";
echo "<script>location='keranjang.php';</script>";


?>