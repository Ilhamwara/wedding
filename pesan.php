<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('php/head.php'); ?>
</head>

<body>
	<section id= "navigation">
		<?php include('php/top-bar.php'); ?>
	</section>	<!-- #navigation -->
	<!-- contact -->
	<section id="price_table">
		<div class="container">
			<div class="row text-center" id="heading">
				<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
					<h2><b style="color:#3498DB;">Harga Paket</b></h2>					
					<hr class="full">
					<?php 
					error_reporting(0);
					if($_GET['message'] == 'success'){ ?>
					<div class="alert alert-success">
						<strong>Form pemesanan berhasil dikirim!</strong>
					</div>							
					<?php
				}
				elseif($_GET['message'] == 'error'){ ?>
				<div class="alert alert-error">
					<strong>Gagal mengirim form pemesanan!</strong>
				</div>
				<?php	}
				?>
			</div>
		</div>	<!-- row -->
		<div class="row main_content">
			<ul class="price-table-chart">
				<li>
					<a href="pesan.php">
						<strong>Paket Small</strong>
						<span class="price_table-description">Untuk 500 Orang</span> 
						<span class="price_table-description">All Dekorasi</span> 
						<span class="price_table-description">450 porsi menu</span>
						<span class="price_table-description">Busana Dan Accecoris</span>
						<span class="price_table-description">Photo dan Video Shooting di Gedung</span> 
						<span class="price_table-price">Rp.50.000.000</span>
						<span class="price_table-button">Pesan Sekarang</span>
					</a>
				</li>

				<li>
					<a href="pesan.php">
						<strong>Paket Meduim</strong>							
						<span class="price_table-description">Untuk 600 Orang</span> 
						<span class="price_table-description">All Dekorasi</span> 
						<span class="price_table-description">750 porsi menu</span>
						<span class="price_table-description">Busana Dan Accecoris</span>
						<span class="price_table-description">Photo dan Video Shooting di Gedung</span> 
						<big class="price_table-price">Rp.75.000.000</big>
						<span class="price_table-button">Pesan Sekarang</span>
					</a>
				</li>

				<li>
					<a href="pesan.php">
						<strong>Paket Extra</strong>
						<span class="price_table-description">Untuk 1000  Orang</span> 
						<span class="price_table-description">All Dekorasi</span> 
						<span class="price_table-description">900 porsi menu</span>
						<span class="price_table-description">Busana Dan Accecoris</span>
						<span class="price_table-description">Photo dan Video Shooting di Gedung</span> 
						<big class="price_table-price">Rp.100.000.000</big>
						<span class="price_table-button">Pesan Sekarang</span>
					</a>
				</li>
			</ul>
		</div>	<!-- row main_content -->
	</div>	<!-- container -->
</section>	<!-- price_table -->
<section id= "contact">
	<div class= "container">
		<div class="row text-center" id= "heading">
			<div class= "bg-image">
				<div class= "col-lg-6 col-lg-offset-3 share-text wow animated zoomInDown" id= "heading-text">
					<h2 class= "text-center" style="color:#3498DB;"><b>Detail Paket</b></h2>			
					<hr class="full">						
				</div>
			</div>
		</div>
		<div class= "row main_content">			
			<div class= "col-md-4">
				<h4><b>Paket Small</b></h4>
				<table class="table table-striped">
					<tr>
						<td>a</td>
						<td>b</td>
					</tr>
				</table>
			</div>	
			<div class= "col-md-4">
				<h4><b>Paket Medium</b></h4>
				<table class="table table-striped">
					<tr>
						<td>a</td>
						<td>b</td>
					</tr>
				</table>
			</div>	
			<div class= "col-md-4">
				<h4><b>Paket Extra</b></h4>
				<table class="table table-striped">
					<tr>
						<td>a</td>
						<td>b</td>
					</tr>
				</table>
			</div>	
		</div>
	</div>
</section>	<!-- contacts -->	
<section id= "contact">
	<div class= "container">
		<div class="row text-center" id= "heading">
			<div class= "bg-image">
				<div class= "col-lg-6 col-lg-offset-3 share-text wow animated zoomInDown" id= "heading-text">
					<h2 class= "text-center" style="color:#3498DB;"><b>Form Pemesanan Paket</b></h2>			
					<hr class="full">						
				</div>
			</div>
		</div>
		<div class= "row text-center main_content">
			<p>Masukan data anda disini</p>			
			<div class= "col-md-6 col-md-offset-3 text-center">
				<form method="post" action="php/control/pemesanan.php">
					<input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>" required style="border-radius:3px;">
					<div class= "form">
						<div class="form-group row">							
							<div class="col-md-12">
								<select class="form-control" name="nama_barang">
									<option>-- Pilih Jenis Pemesanan Anda --</option>
									<option value="Paket Small">Paket Small</option>
									<option value="Paket Medium">Paket Medium</option>
									<option value="Paket Extra">Paket Extra</option>
								</select>
							</div>
						</div>												
						<input type="hidden" name="qty" value="1">
						<input type="hidden" name="sewa" value="1">								
						<div class="form-group row">							
							<div class="col-md-12">
								<textarea class="form-control" type="text" name="deskripsi" placeholder="Keterangan" required style="border-radius:3px;"></textarea>
							</div>
						</div>
						<div class="form-group row">							
							<div class="col-md-12">
								<input class="btn send btn-success" name="pesan" type="submit" value="Pesan Sekarang" style="border-radius:3px; color:#fff;">
							</div>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</section>	<!-- contacts -->	
	<!-- footer -->
	<section id= "footer" class= "main-footer">
		<?php include('php/footer.php'); ?>
	</section><!-- footer -->
</body>
</html>
