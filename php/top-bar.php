<?php 
include 'admin/php/control/koneksi.php';
error_reporting(0);
$id = $_SESSION['id'];
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="ion-navicon"></span>
			</button>
			<a class="navbar-brand" href="index.php">Manunggal Dekorasi</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<!-- <li><a href="#about">About Us</a></li> -->
				<li><a href="product.php">Product</a></li>				
				<!-- <li><a href="#team">Team</a></li> -->				
				<li><a href="dekorasi.php">Dekorasi</a></li>
				<li><a href="hiburan.php">Hiburan</a></li>
				<li><a href="client.php">Klien Kami</a></li>
				<li><a href="service.php">Service</a></li>				
				<!-- <li><a href="#price_table">Price Table</a></li>
				<li><a href="#blog">Blog</a></li> -->
				<!-- <li><a href="testimoni.php">Testimoni</a></li> -->
				<li><a href="contact.php">Kontak</a></li>
				<?php 
				if ($_SESSION['id']) { ?>
				<li><a href="profile.php?page=my-profile">My Account</a></li>					
				<?php
			}
			else{ ?>
			<li><a href="login.php">Login</a></li>
			<?php
		}
		?>				
	</ul>
</div>	<!-- collapse navbar-collapse -->
</div>	<!-- container-fluid -->
</nav>	<!-- navbar -->