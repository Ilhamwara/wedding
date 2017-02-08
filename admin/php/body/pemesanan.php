<?php 

include 'php/control/koneksi.php';
$page = $_GET['page'];








//-------------------------------------SHOW DATA FASILITAS ROOM---------------------------------//
if ($page == 'pemesanan') {
	?>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3 class="panel-title"><b>Data Pemesanan</b></h3>
					<br>
					<div class="table-responsive">
						<table class="table table-hover" style="text-align:center;">
							<tr>
								<th style="text-align:center;">No</th>								
								<th style="text-align:center;">Pembeli</th>
								<th style="text-align:center;">Barang</th>
								<th style="text-align:center;">Lama Sewa</th>						
								<th style="text-align:center;">Qty</th>						
								<th style="text-align:center;">Harga</th>														
								<th style="text-align:center;">Keterangan</th>							
								<th style="text-align:center;">Status</th>															
								<th style="text-align:center;">Tanggal</th>
								<th style="text-align:center; width: 10%;">Action</th>
							</tr>

							<!-- DATA KOSONG -->
							<?php 
							$per_page = 100;

							$page_query = mysql_query("SELECT COUNT(*) FROM pemesanan");
							$pages = ceil(mysql_result($page_query, 0) / $per_page);

							$hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
							$start = ($hal - 1) * $per_page;

							// $show = mysql_query("SELECT * FROM pemesanan LIMIT $start, $per_page");
							$show = mysql_query("SELECT pemesanan.id, member.nama,pemesanan.nama_barang,pemesanan.harga,pemesanan.lama_sewa,pemesanan.qty,pemesanan.deskripsi,pemesanan.status, pemesanan.date FROM pemesanan INNER JOIN member ON pemesanan.user_id=member.id WHERE pemesanan.status='0' LIMIT $start, $per_page");
							
							$row = mysql_num_rows($show);
							if ($row == 0) {
								?>						
								<tr>
									<td colspan="15" class="bg-red"><b>DATA KOSONG</b></td>
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
										<td><?php echo $cek['nama_barang']; ?></td>
										<td><?php echo $cek['lama_sewa']; ?></td>
										<td><?php echo $cek['qty']; ?></td>
										<td><?php echo $cek['harga']; ?></td>
										<td><?php echo $cek['deskripsi']; ?></td>
										<td><?php if($cek['status'] == '0'){ ?>
											<span class="btn btn-warning"><b>Pending</b></span>
											<?php
										} else{ ?>
										<span class="btn btn-success"><b>Confirm</b></span>
										<?php
									} ?></td>
									<td><?php echo $cek['date']; ?></td>
									<td>
										<a href="main.php?page=form-pemesanan&&key=<?php echo $cek['id']; ?>" class="btn btn-default" data-toggle="tooltip" title="View Checkout"><i class="fa fa-eye"></i></a>
										<a onclick="return confirm('Apa Anda yakin ingin menghapus pemesanan ini ?');" href="php/control/delete.php?page=delete-pemesanan&&key=<?php echo $cek['id']; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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
									echo '  <li class="active"><a href="?page=fasilitas&&hal='.$x.'">'.$x.'</a></li> ';
								}
								else{
									echo ' <li><a href="?page=fasilitas&&hal='.$x.'">'.$x.'</a></li>';
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


	//---------------------------------------FORM EDIT ROOM-------------------------------------------//
elseif ($page == 'form-pemesanan') {

	if (isset($_GET['key'])) {

		$id = $_GET['key'];
		$query = mysql_query("SELECT pemesanan.id, member.nama,pemesanan.nama_barang,pemesanan.harga,pemesanan.bukti,pemesanan.lama_sewa,pemesanan.qty,pemesanan.deskripsi,pemesanan.status, pemesanan.date FROM pemesanan INNER JOIN member ON pemesanan.user_id=member.id WHERE pemesanan.id='$id'");
		$rows = mysql_fetch_array($query);			
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="panel-title"><b>Form Pemesanan</b></h3>
						<hr>
						<table class="table table-striped text-center">
							<tr>
								<td><b>Nama</b></td>
								<td><?php echo $rows['nama']; ?></td>
							</tr>
							<tr>
								<td><b>Nama Barang</b></td>
								<td><?php echo $rows['nama_barang']; ?></td>
							</tr>
							<tr>
								<td><b>Harga</b></td>
								<td><?php echo $rows['harga']; ?></td>
							</tr>
							<tr>
								<td><b>Lama Sewa</b></td>
								<td><?php echo $rows['lama_sewa']; ?></td>
							</tr>
							<tr>
								<td><b>Quantity</b></td>
								<td><?php echo $rows['qty']; ?></td>
							</tr>
							<tr>
								<td><b>Keterangan</b></td>
								<td><?php echo $rows['deskripsi']; ?></td>
							</tr>
							<tr>
								<td><b>Status</b></td>
								<td><?php if($rows['status'] == '0'){ echo 'Belum Melakukan Checkout'; } else{ echo 'Sudah Checkout'; } ?></td>
							</tr>
							<tr>
								<td><b>Bukti Pembayaran</b></td>
								<td><img src="../img/<?php if($rows['bukti'] == ''){ echo 'empty.png'; } else{ echo $rows['bukti']; } ?>" width="250" height="250"></td>
							</tr>
							<tr>
								<td><b>Tanggal</b></td>
								<td><?php echo $rows['date']; ?></td>
							</tr>
							<tr>
								<td colspan="2">
								<a href="main.php?page=pemesanan" class="btn btn-default"><b><i class="fa fa-arrow-left"></i> Back</b></a>
									<?php if(!empty($rows['bukti']) == ''){ ?>
									<a class="btn btn-warning"><b>Pending</b></a>
									<?php
								} elseif(!empty($rows['bukti']) && ($rows['status'] == '0') ){ ?>
								<form action="php/control/confirm.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
									<button name="confirm" class="btn btn-success"><b>Confirm</b></button>
								</form>								
								<?php							
							} 
							if($rows['status'] == '1'){ ?>
							<a class="btn btn-primary"><b>Sudah di Confirm</b></a>
							<?php
						}
						?>
					</td>
				</tr>
			</table>							
		</div>
	</div>
</div>
</div>
<?php
}
}
//---------------------------------------TUTUP FORM EDIT ROOM---------------------------------------//
?>


