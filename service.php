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

	<!-- Our service -->
	<section id="our_service">
		<div class="container">
			<div class="row text-center" id= "heading">
				<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id= "heading-text">
					<h2><b style="color:#3498DB;">Our Services</b></h2>					
					<hr class= "full">
					<br/>
				</div>
			</div>
			<div class="main_content">
				<div class="services">
					<div class="row">
						<div class="col-sm-4 service">
							<div class="service-icon text-center">
								<i class="fa fa-building fa-5x" style="color:#bbb;"></i>
							</div>
							<div class="about-service">
								<h3 class="text-center">Dekorasi</h3>
								<p class="text-center">
									Dekorasi Wedding dengan tema modern maupun dengan tema adat daerah
								</p>
							</div>
						</div>	<!-- col-sm-4 -->
						<div class="col-sm-4 service">
							<div class="service-icon text-center">
								<i class="fa fa-briefcase fa-5x" style="color:#F06292;"></i>
							</div>
							<div class="about-service">
								<h3 class="text-center">tata rias </h3>
								<p class="text-center">
									fasilitas Makeup terpercaya dan unggulan
								</p>
							</div>
						</div>	<!-- col-sm-4 -->
						<div class="col-sm-4 service">
							<div class="service-icon text-center">
								<i class="fa fa-cutlery fa-5x" style="color:#8D6E63;"></i>
							</div>
							<div class="about-service">
								<h3 class="text-center">Catering</h3>
								<p class="text-center">
									Memberikan beraneka ragam macam makanan daerah maupun modern
								</p>
							</div>
						</div>	<!-- col-sm-4 -->
					</div>	<!-- row -->
					<div class="row">
						<div class="col-sm-4 service">
							<div class="service-icon text-center">
								<i class="fa fa-users fa-5x" style="color:#26A69A;"></i>
							</div>
							<div class="about-service">
								<h3 class="text-center">Dress</h3>
								<p class="text-center">
									Pakaian yang menyusaikan gaya style modern dan daerah adat 
								</p>
							</div>
						</div>	<!-- col-sm-4 -->
						<div class="col-sm-4 service">
							<div class="service-icon text-center">
								<i class="fa fa-picture-o fa-5x" style="color:#FDD835;"></i>
							</div>
							<div class="about-service">
								<h3 class="text-center">Photo dokumentasi</h3>
								<p class="text-center">
									Sesi foto group, keluarga studio akan memberikan hasil yang memuaskan
								</p>
							</div>
						</div>	<!-- col-sm-4 -->
						<div class="col-sm-4 service">
							<div class="service-icon text-center">
								<i class="fa fa-film fa-5x" style="color:#F44336;"></i>
							</div>
							<div class="about-service">
								<h3 class="text-center">Film dokumentasi</h3>
								<p class="text-center">
									Kualitas Video yang jernih untuk direkam 
								</p>
							</div>
						</div>	<!-- col-sm-4 -->
					</div>	<!-- row -->
				</div>	<!-- services -->
			</div>	<!-- main_content -->
		</div>	<!-- container -->
	</section>	<!-- our_service -->		
	<!-- footer -->
	<section id= "footer" class= "main-footer">
		<?php include('php/footer.php'); ?>
	</section><!-- footer -->

	<!-- js -->
	<script>
		$(document).ready(function() {
			$("#client-speech").owlCarousel({
				autoPlay: 3000,
      				navigation : false, // Show next and prev buttons
      				slideSpeed : 700,
      				paginationSpeed : 1000,
      				singleItem:true
      			});
		});
	</script>
	<script>
		new WOW().init();
	</script>
	<script>
		$( function() {
				  // init Isotope
				  var $container = $('.isotope').isotope
				  ({
				  	itemSelector: '.element-item',
				  	layoutMode: 'fitRows'
				  });


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
  					var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				});
  				
			  // change is-checked class on buttons
			  $('.button-group').each( function( i, buttonGroup ) 
			  {
			  	var $buttonGroup = $( buttonGroup );
			  	$buttonGroup.on( 'click', 'button', function() 
			  	{
			  		$buttonGroup.find('.is-checked').removeClass('is-checked');
			  		$( this ).addClass('is-checked');
			  	});
			  });
			  
			});
		</script>
		<script src="js/jquery-ui-1.10.3.min.js"></script>
		<script src="js/jquery.knob.js"></script>
		<script src="js/daterangepicker.js"></script>
		<script src="js/bootstrap3-wysihtml5.all.min.js"></script>
		<script src="js/dashboard.js"></script>
		
	</body>
	</html>
