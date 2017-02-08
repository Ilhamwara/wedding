<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('php/head.php'); ?>
</head>

<body>
	<div id="wrapper">
		<div id="overlay-1">
			<section id= "navigation">
				<?php include('php/top-bar.php'); ?>
			</section>	<!-- #navigation -->
			<section id="starting" style="padding:0px;">
				<div class="text-center starting-text">
					<h1 class="rene" style="color:#3498DB;">Manunggal Dekorasi</h1>
					<h2>Selamat Datang Di Website Resmi Kami</h2>
				</div>
			</section>
			<div id="bottom" class="bottom text-center">
				<a href="#about"><i class="ion-ios7-arrow-down"></i></a>
			</div>
		</div><!-- overlay-1 -->
	</div>	<!-- wrapper -->		

	<!-- About Us -->
	<section id="about">
		<div class="container">
			<div class="row text-center" id="heading">
				<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
					<h2><b style="color:#3498DB;">Tentang Kami</b></h2>					
					<hr class="full">
					<br/>
				</div>
			</div>	<!-- row -->
			<div class="row about-us-text">
				<div class="col-md-8 col-md-offset-2">
					<p class="text-center">
						Manunggal Dekorasi adalah usaha di bidang penyewaan dekorasi alat pesta yang berada di daerah depok dan usaha ini di pimpin langsung oleh Bp. Andri Budi Santoso awal usaha ini merintis pada tahun 2015 dan prioritas kami dalam menjalankan usaha adalah mengutamakan pelanggan sebagai prioritas utama walaupun kami memang baru dalam usaha penyewaan dekorasi tapi kami tetap menjadi yang terbaik di mata pelanggan. 
					</p>
				</div>
			</div>	<!-- row -->
		</div>	<!-- container -->
	</section>	<!-- about us -->
	<!-- Price-Table -->
	<section id="price_table">
		<div class="container">
			<div class="row text-center" id="heading">
				<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
					<h2><b style="color:#3498DB;">Harga Paket</b></h2>					
					<hr class="full">
					<br/>
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
	<!-- Portfolio -->
	<section id="portfolio">
		<div class="container">
			<div class="row text-center" id="heading">
				<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
					<h2><b style="color:#3498DB;">Klien Kami</b></h2>						
					<hr class="full">
					<br/>               
				</div>
			</div>
			<div class="main_content">
				<div class="row">
					<div class="isotope" id="port-items">
						<div class="col-md-4 col-sm-6 col-xs-6 element-item web" data-category="web">
							<img class="img-responsive" src="img/wedding1.jpg" >
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item game" data-category="game">
							<img class="img-responsive" src="img/wedding2.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item app" data-category="app">
							<img class="img-responsive" src="img/wedding3.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item web" data-category="web">
							<img class="img-responsive" src="img/wedding4.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item game" data-category="game">
							<img class="img-responsive" src="img/wedding5.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item app" data-category="app">
							<img class="img-responsive" src="img/wedding6.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item web" data-category="web">
							<img class="img-responsive" src="img/wedding7.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item game" data-category="game">
							<img class="img-responsive" src="img/wedding8.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item app" data-category="app">
							<img class="img-responsive" src="img/wedding9.jpg">
						</div>
					</div>	<!-- isotope -->
				</div>	<!-- row -->
			</div>	<!-- main_content -->
		</div>	<!-- container -->
	</section>	<!-- portfolio -->

	<!-- footer -->
	<section id= "footer" class= "main-footer">
		<?php include('php/footer.php'); ?>
	</section><!-- footer -->
	
	<script src="js/jquery-ui-1.10.3.min.js"></script>
	<script src="js/jquery.knob.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script src="js/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="js/dashboard.js"></script>

</body>
</html>
