<?php
include "header.php";
include "navbar.php";
?>
<body>
	<style>
		body{
			margin: 0;
			padding: 0;
			background: url(abu.jpeg);
			background-position: center;
			font-family: 'Times New Roman', Times, serif;
		}
	</style>
</body>
<div class="container">
	<div class="card mt-2">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6">
				<div class="card bg-success text-black">
					<div class="card-body">
					<i class="fa-solid fa-truck-fast"></i>
						Data Barang
						<?php
						include '../koneksi.php';
						$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
						$jumlah_produk = mysqli_num_rows($data_produk);
						?>
						<h3><?php echo $jumlah_produk; ?></h3>
						<a href="data_barang.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card bg-warning text-black">
					<div class="card-body">
						<i class="fa-solid fa-bag-shopping"></i>
						Data Pembelian
						<?php
						include '../koneksi.php';
						$data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
						$jumlah_penjualan = mysqli_num_rows($data_penjualan);
						?>
						<h3><?php echo $jumlah_penjualan; ?></h3>
						<a href="pembelian.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mt-2">
	<div class="card-body">
		<center>
			<p>𝒮𝑒𝓁𝒶𝓂𝒶𝓉 𝒹𝒶𝓉𝒶𝓃𝑔 𝒹𝒾𝒽𝒶𝓁𝒶𝓂𝒶𝓃 𝓅𝑒𝓉𝓊𝑔𝒶𝓈, 𝓈𝒾𝓁𝒶𝒽𝓀𝒶𝓃 𝒶𝓃𝒹𝒶 𝒷𝒾𝓈𝒶 𝓂𝑒𝓃𝑔𝒶𝓀𝓈𝑒𝓈 𝒷𝑒𝒷𝑒𝓇𝒶𝓅𝒶 𝒻𝒾𝓉𝓊𝓇</p>
		</center>
	</div>
</div>
</div>

<?php
include "footer.php";
?>