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
						<h2 class= "text-center" style="color:#3498DB;"><b>Login</b></h2>			
						<hr class="full">

						<?php 
						error_reporting(0);
						if ($_GET['message'] == 'success') { ?>
						<div class="alert alert-success">
							<strong>Akun anda berhasil di buat! Silahkan login</strong>
						</div>
						<?php	
					}
					elseif ($_GET['message'] == 'error') { ?>
					<div class="alert alert-danger">
						<strong>Kesalahan pada username atau password anda! Silahkan coba lagi</strong>
					</div>
					<?php
				}
				elseif ($_GET['message'] == 'akun') { ?>
				<div class="alert alert-warning">
					<strong>Anda harus login terlebih dahulu unutuk melakukan pemesanan</strong>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<div class= "row text-center main_content">
	<p>isi username dan password</p>			
	<div class= "col-md-6 col-md-offset-3 text-center">
		<form method="post" action="php/control/login.php">
			<div class= "form">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon" style="border-radius:3px 0px 0px 3px;">
						<i class="fa fa-user fa-fw"></i>
					</span>
					<input class="form-control" type="text" name="username" placeholder="Username" required style="border-radius:0px 3px 3px 0px;">
				</div>
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon" style="border-radius:3px 0px 0px 3px;">
						<i class="fa fa-key fa-fw"></i>
					</span>
					<input class="form-control" type="password" name="password" placeholder="Password" required style="border-radius:0px 3px 3px 0px;">
				</div>							
				<a href="register.php" class="pull-left">Register Akun</a>
				<br><br>
				<input class="btn send" type="submit" name="login" value="Login" style="clear:both; background:#E74C3C; border-radius:3px; color:#fff;">
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
