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
					<h2 ><b style="color:#3498DB;">Klien Kami</b></h2>
					<h5>
						Dengan pelayanan terbaik kami, akan sangat membantu untuk acara pernikahan anda
					</h5>
				</div>
			</div>
			<div class="main_content">				
				<div class="row" >
					<div class="isotope" id="port-items">
						<?php  
						$per_page = 12;

						$page_query = mysql_query("SELECT COUNT(*) FROM member");
						$pages = ceil(mysql_result($page_query, 0) / $per_page);

						$hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
						$start = ($hal - 1) * $per_page;

							// $show = mysql_query("SELECT * FROM pemesanan LIMIT $start, $per_page");
						$show = mysql_query("SELECT * FROM member LIMIT $start, $per_page");

						$row = mysql_num_rows($show);
						if ($row == 0) {
							?>							
							DATA KOSONG
							<?php } ?>
							<?php 
							$no=1;
							while ($cek = mysql_fetch_array($show)) { 
								?>
								<div class="col-md-4 col-sm-6 col-xs-6 hover-img">
									<img class="img-responsive" src="img/<?php echo $cek['foto']; ?>" style="width:450px; height: 290px; cursor: pointer;" data-toggle="modal" data-target="#myModal<?php echo $cek['id']; ?>">
								</div>

								<!-- Modal -->
								<div class="modal fade" id="myModal<?php echo $cek['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top: 100px;">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel"><b>Info Detail Klien</b></h4>
											</div>
											<div class="modal-body">
												<table class="table table-striped">
													<tr>
														<td><b>Nama</b></td>
														<td><?php echo $cek['nama']; ?></td>
													</tr>
													<tr>
														<td><b>Alamat</b></td>
														<td><?php echo $cek['alamat']; ?></td>
													</tr>
													<tr>
														<td><b>Phone</b></td>
														<td><?php echo $cek['phone']; ?></td>
													</tr>
													<tr>
														<td><b>E-mail</b></td>
														<td><?php echo $cek['email']; ?></td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>


								<?php 
							} 
							?>
							<!-- <div class="col-md-4 col-sm-6 col-xs-6 element-item game" data-category="game">
								<img class="img-responsive" src="img/wedding2.jpg">
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 element-item app" data-category="app">
								<img class="img-responsive" src="img/wedding3.jpg">
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 element-item web" data-category="web">
								<img class="img-responsive" src="img/wedding4.jpg">
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 element-item game" data-category="game">
								<img class="img-responsive" src="img/wedding5.jpg">
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 element-item app" data-category="app">
								<img class="img-responsive" src="img/wedding6.jpg">
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 element-item web" data-category="web">
								<img class="img-responsive" src="img/wedding7.jpg">
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 element-item game" data-category="game">
								<img class="img-responsive" src="img/wedding8.jpg">
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6 element-item app" data-category="app">
								<img class="img-responsive" src="img/wedding9.jpg">
							</div> -->
						</div>	<!-- isotope -->						
					</div>	<!-- row -->
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
