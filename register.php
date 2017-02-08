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
	<section id= "contact">
		<div class= "container">
			<div class="row text-center" id= "heading">
				<div class= "bg-image">
					<div class= "col-lg-6 col-lg-offset-3 share-text wow animated zoomInDown" id= "heading-text">
						<h2 class= "text-center" style="color:#3498DB;"><b>Register</b></h2>			
						<hr class="full">

						<?php 
						error_reporting(0);
						if($_GET['message'] == 'error'){ ?>
							<div class="alert alert-error">
								<strong>Gagal menyimpan akun anda!</strong>
							</div>
					<?php	}
						?>
					</div>
				</div>
			</div>
			<div class= "row text-center main_content">
				<p>Masukan data anda disini</p>			
				<div class= "col-md-6 col-md-offset-3 text-center">
					<form method="post" action="php/control/register.php">
						<div class= "form">
							<div class="form-group row">							
								<div class="col-md-12">
									<input class="form-control" type="text" name="nama" placeholder="Nama" required style="border-radius:3px;">
								</div>
							</div>
							<div class="form-group row">							
								<div class="col-md-12">
									<input class="form-control" type="text" name="alamat" placeholder="Alamat" required style="border-radius:3px;">
								</div>
							</div>
							<div class="form-group row">							
								<div class="col-md-12">
									<input class="form-control" type="text" name="username" placeholder="Username" required style="border-radius:3px;">
								</div>
							</div>
							<div class="form-group row">							
								<div class="col-md-12">
									<input class="form-control" type="email" name="email" placeholder="Email" required style="border-radius:3px;">
								</div>
							</div>
							<div class="form-group row">							
								<div class="col-md-12">
									<input class="form-control" type="text" name="phone" placeholder="Phone" required style="border-radius:3px;">
								</div>
							</div>
							<div class="form-group row">							
								<div class="col-md-12">
									<input class="form-control" type="text" name="password" placeholder="Password" required style="border-radius:3px;">
								</div>
							</div>
							<div class="form-group row">							
								<div class="col-md-12">
									<input class="btn send btn-success" name="reg" type="submit" value="Register" style="border-radius:3px; color:#fff;">
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
