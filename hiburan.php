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

	<!-- Portfolio -->
	<section id="portfolio">
		<div class="container">
			<div class="row text-center" id="heading">
				<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
					<h2 ><b style="color:#3498DB;">Hiburan Dari Kami</b></h2>
					<h5>
						Kami Memberikan Pelayanan hiburan juga loh
					</h5>
				</div>
			</div>
			<div class="main_content">				
				<div class="row">
					<div class="isotope" id="port-items">
						<div class="col-md-4 col-sm-6 col-xs-6 element-item web" data-category="web">
							<img class="img-responsive" src="img/hiburan1.jpg" >
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item game" data-category="game">
							<img class="img-responsive" src="img/hiburan2.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item app" data-category="app">
							<img class="img-responsive" src="img/hiburan3.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item web" data-category="web">
							<img class="img-responsive" src="img/hiburan4.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item game" data-category="game">
							<img class="img-responsive" src="img/hiburan5.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item app" data-category="app">
							<img class="img-responsive" src="img/hiburan6.jpg">
						</div>	
						<div class="col-md-4 col-sm-6 col-xs-6 element-item game" data-category="game">
							<img class="img-responsive" src="img/hiburan7.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item app" data-category="app">
							<img class="img-responsive" src="img/hiburan8.jpg">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 element-item app" data-category="app">
							<img class="img-responsive" src="img/hiburan2.jpg">
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
</body>
</html>
