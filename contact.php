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
	<section id="about">
		<div class="container">
			<div class="row text-center" id="heading">
				<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
					<h2><b style="color:#3498DB;">Kontak Kami</b></h2>							
					<hr class="full">
					<br/>
				</div>
			</div>	<!-- row -->
			<div class="row">
				<div class="col-md-6">
					<div style="width:500px;overflow:hidden;height:400px;max-width:100%;"><div id="gmap-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=UNAS,+Pasar+Minggu,+South+Jakarta+City,+Special+Capital+Region+of+Jakarta,+Indonesia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="code-for-google-map" rel="nofollow" href="https://www.interserver-coupons.com" id="authorize-map-data">interserver-coupons.com</a><style>#gmap-canvas .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=f750f196-5004-f1d5-beb5-903dcd9a0972&c=code-for-google-map&u=1476512635" defer="defer" async="async"></script>
				</div>
				<div class="col-md-6">
					<table class="table text-center" style="border-bottom:1px solid #ddd;">
						<tr>
							<td>Nama</td>
							<td>Andri Budi Santoso</td>
						</tr>						
						<tr>
							<td>email</td>
							<td>manunggaldekorasi@gmail.com</td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>0856-9775-0860</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>Jl. Haji Sanip kel. Grogol kec. Limo kota Depok</td>
						</tr>
					</table>
				</div>
			</div>	<!-- row -->
		</div>	<!-- container -->
	</section>	<!-- about us -->	
	<!-- footer -->
	<section id= "footer" class= "main-footer">
		<?php include('php/footer.php'); ?>
	</section><!-- footer -->
	</body>
	</html>
