<nav class="navbar sticky-top">

		<a href="index.php" class="navbar-logo">Toko<span>Online</span></a>

		<div class="navbar-menu">
			<a href="index.php">Beranda</a>
			<a href="#">Tentang Kami</a>
			<a href="produk.php">Produk</a>
			<a href="#">Kontak</a>
		</div>


		<div class="navbar-icon">
			<a href="#"><i class="fas fa-search"></i></a>
			<a href="keranjang.php"><i class="fas fa-shopping-cart"></i></a>
			<a href="#" id="btn-user"><i class="fas fa-user"></i></a>
			<a href="#" id="btn-menu"><i class="fas fa-bars"></i></a>
		</div>

		<div class="user">
			<?php if(isset($_SESSION['pelanggan'])): ?>
			<li><a href="pelanggan/index.php">Profil</a></li>
			<li><a href="logout.php">Logout</a></li>
			<?php else: ?>
			<li><a href="login.php">Login</a></li>
			<li><a href="daftar.php">Daftar</a></li>
			<?php endif; ?>
		</div>


</nav>