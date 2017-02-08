 <?php 

 // $query = mysql_query("SELECT * FROM pemesanan");
 include 'php/control/koneksi.php';
 $tanggal=array();
 $jumlah=array();
 $query = mysql_query("SELECT day(date) AS tanggal,SUM(harga) AS total FROM pemesanan WHERE status = '1'  GROUP BY day(date)");
 //$query = mysql_query("SELECT day(date) as tanggal,SUM(harga) AS total FROM pemesanan where status = '1' ");
 while ($cek = mysql_fetch_array($query)) {
 	$tanggal[] = $cek['tanggal'];
 	$jumlah[] = $cek['total'];
 	$datetime = $tanggal; 
 }
 $tgl = join(",",$tanggal);
 $jml = join(",",$jumlah);
 $date = $tgl;
 $jumlahx = $jml;

 ?>
 <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-default">
 			<div class="panel-heading text-center">
 				<h3><b>Grafik Online Transaction Processing</b></h3>
 			</div>
 			<br>
 			<div class="panel-body"> 

 				<div class="col-lg-12" style="margin-bottom: 30px;">
 					<form action="#" method="POST" class="form-inline">
 						<div >
 							<h4>Sort by Date :</h4>
 							<input type="date" class="form-control" name='awal'> 
 							s/d
 							<input type="date" class="form-control" name='akhir'> 
 							<input type='submit' class="btn btn-primary" name='src' value='SEARCH'>
 						</div>							
 					</form> 
 				</div>




 				<?php
 				if(isset($_POST['src'])){
 					if($_POST['awal'] != '' && $_POST['akhir'] != '' ){

 						if($_POST['awal'] < $_POST['akhir']){

 							$query = mysql_query("SELECT * FROM pemesanan WHERE date BETWEEN '".$_POST['awal']."' AND '".$_POST['akhir']."' ORDER BY date DESC");

 							$tanggal=array();
 							$jumlah=array();
 							$query2 = mysql_query("SELECT day(date) as tanggal,SUM(harga) AS total FROM pemesanan WHERE status='1' AND date BETWEEN '".$_POST['awal']."' AND '".$_POST['akhir']."' GROUP BY day(date)");
 							while ($cek2 = mysql_fetch_array($query2)) {
 								$tanggal[] = $cek2['tanggal'];
 								$jumlah[] = $cek2['total'];
 								$datetime = $tanggal; 

 							}

 							$tgl = join(",",$tanggal);
 							$jml = join(",",$jumlah);
 							$date = $tgl;
 							$jumlahx = $jml;
 							if ($query) {
 								?>
 								<div class="col-lg-12 text-center" style="margin-bottom: 50px;">
 									<br><h4>Ini adalah grafik transaksi penjualan <br>dari tanggal <b><?php echo $_POST['awal'];  ?></b> sampai tanggal <b><?php echo $_POST['akhir'];  ?></b> </h4> 
 								</div>
 								<?php
 							}
 						}
 					}
 				}

 				?>

 				<div id="myChart" style="min-width: 78%; height: 400px; margin: 50px auto;"></div>
 				<div class="panel text-center">
 					<h4><b>Tanggal</b></h4>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

<script type="text/javascript">
var chart1; // globally available
$(document).ready(function() {
	chart1 = new Highcharts.Chart({
		chart: {
			renderTo: 'myChart',
			type: 'column'
		},
		title: {
			text: 'Grafik Online Transaction Processing'
		},
		xAxis: {
			categories: [<?php echo $date; ?>]
		},
		yAxis: {
			labels: {
				formartter: function(){
					return this.value;
				},
				style: {
					color: 'black'
				}
			},
			title: {
				text: '<b>Total</b>'
			}
		},
		series:
		[
		
		{
			name: 'Tanggal',
			data: [<?php echo $jumlahx; ?>]
		},

		]
	});
});
</script>
