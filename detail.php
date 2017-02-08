<?php	
session_start();
include 'admin/php/control/koneksi.php';
$id = $_GET['key'];
$id_user = $_SESSION['id'];
$query = mysql_query("SELECT * FROM barang WHERE id_produk = '$id'");
$cek = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('php/head.php'); ?>
</head>
<style type="text/css">
	.panel-body > ul{
		padding: 0px;
	}
	.panel-body > ul > a:hover{
		text-decoration: none;
		color: white
	}
	.panel-body > ul > a > li {
		display: block;
		padding:15px 10px;
		transition: .3s ease-in-out;
	}
	.panel-body > ul > a > li:hover{
		background:   #3498db  ;
		color: white;
		border-radius: 3px;
	}
	.active{
		background:   #3498db  ;
		color: white;
		border-radius: 3px;
	}
</style>	
<body>
	<section id= "navigation">
		<?php include('php/top-bar.php'); ?>
	</section>	<!-- #navigation -->
	<!-- contact -->
	<section id="about" style="overflow: hidden; margin-bottom: 120px;">
		<div class="col-md-12 pull-left">	
			<h3><?php echo $cek['nama']; ?></h3>
			<span style="clear: both;"><?php echo $cek['tanggal']; ?></span>
			<hr style="border:1px solid #efefef;">		
		</div>
		<div class="col-md-6 ">				
			<img src="img/barang/<?php if($cek['foto'] == ''){ echo 'user.jpg'; }else{echo $cek['foto'];} ?>" class=" img-responsive" style="margin: auto; border-radius: 5px;" width="400" height="400">				
		</div>
		<div class="col-md-6">		
			<style type="text/css">
				.table > tbody > tr > td{
					border-top: none;
				}
			</style>		
			<form method="POST" action="php/control/pemesanan.php" >			
				<table class="table table-striped">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
					<tr>
						<td class="text-center"><b>Nama Barang</b></td>
						<td><?php echo $cek['nama']; ?></td>
						<input type="hidden" name="nama_barang" value="<?php echo $cek['nama']; ?>">
					</tr>
					<tr>
						<td class="text-center"><b>Qty</b></td>
						<td><input type="number" class="form-control" name="qty" required></td>
					</tr>
					<tr>
						<td class="text-center"><b>Kategori</b></td>
						<td><?php echo $cek['kategori']; ?></td>
					</tr>
					<tr>
						<td class="text-center"><b>Stock Tersedia</b></td>
						<td><?php echo $cek['tersedia']; ?></td>
					</tr>
					<tr>
						<td class="text-center"><b>Harga</b></td>
						<td><?php echo $cek['harga']; ?></td>
						<input type="hidden" name="harga" value="<?php echo $cek['harga']; ?>">
					</tr>
					<tr>
						<td class="text-center"><b>Lama Sewa</b></td>
						<td>
							<input type="text" class="form-control" name="sewa">
							<span style="color:red;"><sup>*</sup> Penyewaan dalam hitungan hari</span>
						</td>						
					</tr>
					<tr>
						<td class="text-center"><b>Deskripsi</b></td>
						<td><?php echo $cek['deskripsi']; ?></td>
						<td><input type="hidden" name="deskripsi" value="<?php echo $cek['deskripsi']; ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><button class="btn btn-primary" name="pesan">Pesan Sekarang</button></td>
					</tr>
				</table>
			</form>
		</div>
	</section>	<!-- about us -->	

	<!-- footer -->
	<section id= "footer" class= "main-footer">
		<?php include('php/footer.php'); ?>
	</section><!-- footer -->
</body>
</html>
