<?php 

include 'php/control/koneksi.php';
$page = $_GET['page'];

if ($page == 'stok-barang') {
	?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3 class="panel-title"><b>Stock Barang</b></h3>
					<br>
					<a href="main.php?page=tambah-barang" class="btn btn-primary" data-toggle="tooltip" title="Add Product"><i class="fa fa-cart-plus"></i></a>
					<br><br>
					<div class="table-responsive">
						<table class="table table-hover" style="text-align:center;">
							<tr>
								<th style="text-align:center;">No</th>								
								<th style="text-align:center;">Nama</th>
								<th style="text-align:center;">Kategori</th>								
								<th style="text-align:center;">Tersedia</th>
								<th style="text-align:center;">Rusak</th>
								<th style="text-align:center;">Baru</th>	
								<th style="text-align:center;">Deskripsi</th>
								<th style="text-align:center;">Harga</th>
								<th style="text-align:center;">Foto</th>															
								<th style="text-align:center; width: 10%;">Action</th>
							</tr>

							<!-- DATA KOSONG -->
							<?php 
							$per_page = 100;

							$page_query = mysql_query("SELECT COUNT(*) FROM barang");
							$pages = ceil(mysql_result($page_query, 0) / $per_page);

							$hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
							$start = ($hal - 1) * $per_page;

							// $show = mysql_query("SELECT * FROM pemesanan LIMIT $start, $per_page");
							$show = mysql_query("SELECT * FROM barang LIMIT $start, $per_page");

							$row = mysql_num_rows($show);
							if ($row == 0) {
								?>						
								<tr>
									<td colspan="8" class="bg-red"><b>DATA KOSONG</b></td>
								</tr>
								<?php } ?>
								<!-- DATA KOSONG -->

								<!-- SHOW DATA -->

								<?php 
								$no=1;
								while ($cek = mysql_fetch_array($show)) { 
									?>
									<tr>
										<td><b><?php echo $no; ?></b></td>
										<td><?php echo $cek['nama']; ?></td>
										<td><?php echo $cek['kategori']; ?></td>
										<td><?php echo $cek['tersedia']; ?></td>
										<td><?php echo $cek['rusak']; ?></td>
										<td><?php echo $cek['baru']; ?></td>
										<td><?php echo $cek['deskripsi']; ?></td>
										<td><?php echo $cek['harga']; ?></td>
										<td><img src="../img/barang/<?php echo $cek['foto']; ?>" width="120" height="120"></td>
										<td>										
											<a href="main.php?page=update-barang&&key=<?php echo $cek['id_produk']; ?>" class="btn btn-warning" data-toggle="tooltip" title="Update"><i class="fa fa-pencil-square-o"></i></a> 
											<a onclick="return confirm('Apa Anda yakin ingin menghapus barang ini ?');" href="php/control/delete.php?page=delete-barang&&key=<?php echo $cek['id_produk']; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>									
										</td>
									</tr>
									<?php 
									$no++;
								} 

								?>
								<!-- SHOW DATA -->
							</table>		
						</div>
					</div> 
					<nav aria-label="Page navigation" style="text-align:center;">
						<ul class="pagination">
							<?php
							if($pages >= 1 && $hal <= $pages)
							{
								for($x=1; $x<=$pages; $x++)
								{
                                          //echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
									if($x == $hal){
										echo '  <li class="active"><a href="?page=stok-barang&&hal='.$x.'">'.$x.'</a></li> ';
									}
									else{
										echo ' <li><a href="?page=stok-barang&&hal='.$x.'">'.$x.'</a></li>';
									}
								}
							}
							?>
						</ul>
					</nav> 
				</div>
			</div>
		</div>
		<?php
	}
	elseif (($page == 'tambah-barang')) { 
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="panel-title"><b>Form Tambah Barang</b></h3>
					</div>
					<div class="panel-body">
						<br>
						<form class="form-horizontal" action="php/control/control.php?page=tambah-barang" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-2 control-label">Nama Barang</label>
								<div class="col-sm-5">
									<input type="text" class="form-control radius" placeholder="Nama Barang" name="nama" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Kategori Barang</label>
								<div class="col-sm-5">
									<select class="form-control radius" name="kategori">
										<option>-- Kategori Barang --</option>
										<option value="Kursi">Kursi</option>
										<option value="Panggung">Set Panggung</option>
										<option value="Janur">Janur</option>
										<option value="Wayang">Wayang</option>
										<option value="Musik">Alat Musik</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Barang Tersedia</label>
								<div class="col-sm-5">
									<input type="number" class="form-control radius" name="tersedia" required> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Barang Rusak</label>
								<div class="col-sm-5">
									<input type="number" class="form-control radius" name="rusak" required> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Barang Baru</label>
								<div class="col-sm-5">
									<input type="number" class="form-control radius" name="baru" required> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Harga</label>
								<div class="col-sm-5">
									<input type="number" class="form-control radius" name="harga" required> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Deskripsi Barang</label>
								<div class="col-sm-5">
									<input type="text" class="form-control radius" name="desk" required> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Foto</label>
								<div class="col-sm-5">
									<input type="file" class="form-control radius" name="foto" required style="padding: 0px;"> 
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-12">
									<button class="btn btn-primary">Tambah</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php 
	}
	elseif (($page == 'update-barang')) { 

		if(isset($_GET['key'])){

			$id=$_GET['key'];
			$query = mysql_query("SELECT * FROM barang WHERE id_produk=$id");
			$cek = mysql_fetch_array($query);

			?>

			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h3 class="panel-title"><b>Form Edit Barang</b></h3>
						</div>
						<div class="panel-body">
							<br>
							<form class="form-horizontal" action="php/control/control.php?page=update-barang&&key=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-2 control-label">Nama Barang</label>
									<div class="col-sm-5">
										<input type="text" class="form-control radius" placeholder="Nama Barang" name="nama" value="<?php echo $cek['nama']; ?>" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Kategori Barang</label>
									<div class="col-sm-5">
										<select class="form-control radius" name="kategori">
											<option value="<?php echo $cek['kategori']; ?>">-- Kategori Barang --</option>
											<option value="Kursi">Kursi</option>
											<option value="Panggung">Set Panggung</option>
											<option value="Janur">Janur</option>
											<option value="Wayang">Wayang</option>
											<option value="Musik">Alat Musik</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Barang Tersedia</label>
									<div class="col-sm-5">
										<input type="number" class="form-control radius" name="tersedia" value="<?php echo $cek['tersedia']; ?>"> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Barang Rusak</label>
									<div class="col-sm-5">
										<input type="number" class="form-control radius" name="rusak" value="<?php echo $cek['rusak']; ?>"> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Barang Baru</label>
									<div class="col-sm-5">
										<input type="number" class="form-control radius" name="baru" value="<?php echo $cek['baru']; ?>"> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Deskripsi Barang</label>
									<div class="col-sm-5">
										<input type="text" class="form-control radius" name="desk" value="<?php echo $cek['deskripsi']; ?>"> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Harga</label>
									<div class="col-sm-5">
										<input type="text" class="form-control radius" name="harga" value="<?php echo $cek['harga']; ?>"> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Foto</label>
									<div class="col-sm-5">
										<input type="file" class="form-control radius" name="foto" style="padding: 0px;"> 
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-12">
										<button class="btn btn-primary">Edit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<?php
		}
	}
	?>