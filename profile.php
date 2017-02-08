<?php	
session_start();
include 'admin/php/control/koneksi.php';
include('php/control/cek-login.php');
$id = $_SESSION['id'];
$query = mysql_query("SELECT * FROM member WHERE id = $id");
$user = mysql_fetch_array($query);
$page = $_GET['page'];
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
		<div class="container">			
			<?php 
			error_reporting(0);
			if ($_GET['message'] == 'success') { ?>
			<div class="alert alert-success" id="alert">
				<strong>Selamat datang <?php echo $user['nama']; ?> </strong>
			</div>
			<?php	
		} ?>	
	</div>	<!-- row -->
	<div class="col-md-4">	
		<div class="panel panel-default">
			<div class="panel-heading" style="background:  #58d68d; color: white; ">
				<h4><b>Menu</b></h4>
			</div>			
			<div class="panel-body">
				<ul>
					<a href="profile.php?page=my-profile"><li class="<?php if ($page == 'my-profile'){echo "active";}?>"><i class="fa fa-user"></i> Profile</li></a>
					<a href="profile.php?page=setting-profile"><li class="<?php if ($page == 'setting-profile'){echo "active";}?>"><i class="fa fa-cog"></i> Setting Profile</li></a>
					<a href="profile.php?page=history-transaksi"><li class="<?php if ($page == 'history-transaksi'){echo "active";}?>"><i class="fa fa-money"></i> History Transaksi</li></a>
					<a href="php/control/logout.php"><li><i class="fa fa-sign-out"></i> Logout</li></a>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<?php 		
			if ($page == 'my-profile' ) { ?>
			<div class="panel-heading">
				<h4><b>Profile</b></h4>
			</div>			
			<div class="panel-body">
				<img src="img/<?php if($user['foto'] == ''){ echo 'user.jpg'; }else{echo $user['foto'];} ?>" class="img-circle img-responsive" style="margin: auto;" width="150" height="150">
				<br><br>
				<table class="table text-center table-hover">
					<tr>
						<td><b>Nama</b></td>
						<td><?php echo $user['nama']; ?></td>						
					</tr>
					<tr>
						<td><b>Username</b></td>
						<td><?php echo $user['username']; ?></td>
					</tr>
					<tr>
						<td><b>Alamat</b></td>
						<td><?php echo $user['alamat']; ?></td>
					</tr>
					<tr>
						<td><b>Phone</b></td>
						<td><?php echo $user['phone']; ?></td>
					</tr>
					<tr>
						<td><b>Email</b></td>
						<td><?php echo $user['email']; ?></td>
					</tr>
					<tr>
						<td><b>Password</b></td>
						<td><?php echo $user['password']; ?></td>
					</tr>
				</table>
			</div>
			<?php }
			elseif($page == 'setting-profile'){ ?>
			<div class="panel-heading">
				<h4><b>Setting Profile</b></h4>
			</div>			
			<div class="panel-body">
				<?php 
				error_reporting(0);
				if ($_GET['pesan'] == 'success') { ?>
				<div class="alert alert-success" id="alert">
					<strong>Profile anda berhasil di update</strong>
				</div>
				<?php	
			}
			elseif ($_GET['pesan'] == 'error') { ?>
			<div class="alert alert-danger" id="alert">
				<strong>Gagal untuk mengupdate profile anda</strong>
			</div>
			<?php
		}
		$query = mysql_query("SELECT * FROM member WHERE id=$id");
		$array = mysql_fetch_array($query);
		?>
		<form action="php/control/update.php" method="POST" enctype="multipart/form-data">
			<input class="form-control" name="id" type="hidden" value="<?php  echo $array['id']; ?>">
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Nama</label>
				<div class="col-xs-10">
					<input class="form-control" name="nama" type="text" value="<?php echo $array['nama']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Alamat</label>
				<div class="col-xs-10">
					<input class="form-control" name="alamat" type="text" value="<?php echo $array['alamat']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Username</label>
				<div class="col-xs-10">
					<input class="form-control" name="username" type="text" value="<?php echo $array['username']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Phone</label>
				<div class="col-xs-10">
					<input class="form-control" name="phone" type="text" value="<?php echo $array['phone']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Email</label>
				<div class="col-xs-10">
					<input class="form-control" name="email" type="text" value="<?php echo $array['email']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Password</label>
				<div class="col-xs-10">
					<input class="form-control" name="password" type="text" value="<?php echo $array['password']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Foto</label>
				<div class="col-xs-10">
					<input class="form-control" name="foto" type="file" style="padding: 0px;">
				</div>
			</div>
			<div class="form-group row">					
				<div class="col-xs-12 text-center">
					<button class="btn btn-warning" name="update">Update</button>
				</div>
			</div>					
		</form>
	</div>
	<?php
}
elseif ($page == 'history-transaksi') { ?>
<div class="panel-heading">
	<h4><b>Histrory Transaksi</b></h4>
</div>			
<div class="panel-body">
	<?php 
	error_reporting(0);
	if ($_GET['bukti'] == 'success') { ?>
	<div class="alert alert-success" id="alert">
		<strong>Bukti Pembayaran Berhasil di upload</strong>
	</div>
	<?php	
}
elseif ($_GET['bukti'] == 'error') { ?>
<div class="alert alert-danger" id="alert">
	<strong>Gagal untuk Upload Bukti Pembayaran</strong>
</div>
<?php
}
?>
<table class="table table-hover text-center">
	<tr>
		<th class="text-center">No</th>
		<th class="text-center">Harga</th>
		<th class="text-center">Paket</th>
		<th class="text-center">Status</th>
		<th class="text-center">Tanggal</th>
		<th class="text-center">Action</th>
	</tr>
	<?php 
	$query = mysql_query("SELECT * FROM pemesanan WHERE user_id=$id ORDER BY date DESC");
	$cek = mysql_num_rows($query);
	if ($cek > 0) { 
		$no = 0;
		while ($array = mysql_fetch_array($query)) {
			$no = $no+1;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $array['harga']; ?></td>
				<td><?php echo $array['paket']; ?></td>
				<td><?php if($array['status'] == '0'){ ?>
					<span class="btn btn-warning"><b>Pending</b></span>
					<?php
				} else{ ?>
				<span class="btn btn-success"><b>Confirm</b></span>
				<?php
			} ?></td>
			<td><?php echo $array['date']; ?></td>
			<td>
				<?php if (empty($array['bukti'])) { ?>
				<a href="profile.php?page=upload-permbayaran&&kode=<?php echo $array['id']; ?>" class="btn btn-danger" >Check-Out</a>
				<?php
			} 
			elseif(!empty($array['bukti'])){ ?>
			<a class="btn btn-success" ><i class="fa fa-check"></i> Done</a>
			<?php
		}
		?>				
	</td>
</tr>
<?php
}
}
else{ ?>
<tr>
	<td colspan="6" class="bg-red">DATA KOSONG</td>
</tr>
<?php
}
?>

</table>
</div>
<?php
}
elseif ($page == 'upload-permbayaran') { ?>
<?php $id = $_GET['kode'];  ?>
<div class="panel-heading">
	<h4><b>Upload Bukti Pemabayaran</b></h4>
</div>			
<div class="panel-body">
	<form action="php/control/upload.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="file" name="bukti">
		<br>
		<a href="profile.php?page=history-transaksi" class="btn btn-warning">Back</a>
		<input type="submit" class="btn btn-primary" name="upload" value="Upload">
	</form>
</div>
</div>
<?php
} 
?>
</div>
</div>
</section>	<!-- about us -->	

<!-- footer -->
<section id= "footer" class= "main-footer">
	<?php include('php/footer.php'); ?>
</section><!-- footer -->
<script type="text/javascript">
	$("#alert").fadeTo(2000, 500).slideUp(500, function(){
		$("#alert").slideUp(500);
	});		
</script>
</body>
</html>
