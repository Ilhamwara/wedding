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
	<section id= "testimonial">
		<div class= "container">
			<div class= "row text-center" id= "heading">
				<div class= "bg-image col-md-12">
					<div class= "col-md-6 col-md-offset-3 wow animated zoomInDown" id= "heading-text">
						<h3>Testimonials</h3>
						<p>Their satisfication, Our inspiration.</p>
						<hr class= "full">
						<br/>
					</div>
				</div>
			</div>
			<div class= "row main_content">
				<div class= "col-md-6 col-md-offset-3">
					<div id="client-speech" class="owl-carousel owl-theme">
						<div class="item">
							<div class= "row">
								<div class= "col-md-6 col-md-offset-3">
									<img class= "img-circle img-responsive center-block" src="img/client1.png">
								</div>	
								<div class= "col-md-12">
									<p class= "client-comment text-center">
										When you form a team, why do you try to form a team? Because teamwork builds trust and trust builds speed.
									</p>
								</div>
							</div>
							<div class= "row text-center">
								<p class= "client-name text-center"> ----- Noona Nuengthida Sophon</p>
							</div>
						</div>
						<div class="item">
							<div class= "row">
								<div class= "col-md-6 col-md-offset-3">
									<img class= "img-circle img-responsive center-block" src="img/client2.jpg">
								</div>
								<div class= "col-md-12">
									<p class= "client-comment text-center">
										I am constantly being asked about individuals.&nbsp;The only way to win is as a team. Football is not about one or two or three star players.
									</p>
								</div>
							</div>
							<div class= "row text-center">
								<p class= "client-name">-----Md. Aminul Islam Bhuiyan</p>
							</div>
						</div>
						<div class="item">
							<div class= "row">
								<div class= "col-md-6 col-md-offset-3">
									<img class= "img-circle img-responsive center-block" src="img/client3.png">
								</div>
								<div class= "col-md-12">
									<p class= "client-comment text-center">
										Individual commitment to a group effort- that is what makes a team work, a company work, a society work, a civilisation work.
									</p>
								</div>
							</div>
							<div class= "row text-center">
								<p class= "client-name">-----  Jenifar Pink</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>	<!-- clients -->			
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
