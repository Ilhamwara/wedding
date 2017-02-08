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
					<h2 ><b style="color:#3498DB;">Product Kami</b></h2>
					<h5>
						Penyewaan Alat Dekorasi Pesta Maupun Hiburan Pada Manunggal Dekorasi 
					</h5>
				</div>
			</div>
			<div class="main_content">	
				<div class="row">

					<?php  
					$per_page = 12;

					$page_query = mysql_query("SELECT COUNT(*) FROM barang");
					$pages = ceil(mysql_result($page_query, 0) / $per_page);

					$hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
					$start = ($hal - 1) * $per_page;

							// $show = mysql_query("SELECT * FROM pemesanan LIMIT $start, $per_page");
					$show = mysql_query("SELECT * FROM barang LIMIT $start, $per_page");

					$row = mysql_num_rows($show);
					if ($row == 0) {
						?>							
						DATA KOSONG
						<?php } ?>
						<!-- DATA KOSONG -->

						<!-- SHOW DATA -->

						<?php 
						$no=1;
						while ($cek = mysql_fetch_array($show)) { 
							?>

							<div class="col-sm-6 col-md-3">
								<div class="thumbnail">
									<img class="img-responsive" src="img/barang/<?php echo $cek['foto']; ?>" >
									<div class="caption" style="overflow: hidden;">
										<h3><?php echo $cek['nama']; ?></h3>
										<div style="height: 120px;">											
											<?php echo $cek['deskripsi']; ?>											
										</div>
										<p>
											<a href="detail.php?key=<?php echo $cek['id_produk']; ?>" class="btn btn-primary pull-right" role="button">Lihat Detail</a> 									
										</p>
									</div>
								</div>
							</div>

							<?php 
						}
						?>
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
										echo '  <li class="active"><a href="?hal='.$x.'">'.$x.'</a></li> ';
									}
									else{
										echo ' <li><a href="?hal='.$x.'">'.$x.'</a></li>';
									}
								}
							}
							?>
						</ul>
					</nav> 
				</div>	<!-- main_content -->
			</div>	<!-- container -->
		</section>	<!-- portfolio -->

		<!-- footer -->
		<section id= "footer" class= "main-footer">
			<?php include('php/footer.php'); ?>
		</section><!-- footer -->
	</body>
	</html>
