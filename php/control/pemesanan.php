<?php 
session_start();
include '../../admin/php/control/koneksi.php';
include('cek-login.php');

if (isset($_SESSION['id'])) {
	if (isset($_POST['pesan'])) {
		$id = $_POST['id'];
		$nama_barang = $_POST['nama_barang'];	
		$des = $_POST['deskripsi'];
		$qty = $_POST['qty'];
		$sewa = $_POST['sewa'];
		$harga_barang = $_POST['harga'];
		$harga = ($qty * $harga_barang) * $sewa;
		if ($nama_barang == 'Paket Small') {
			$harga = '50000000';
		}
		elseif ($nama_barang == 'Paket Medium') {
			$harga = '75000000';
		}
		elseif ($nama_barang == 'Paket Extra') {
			$harga = '100000000';	
		}


		$query = mysql_query("INSERT INTO pemesanan VALUES('','$id','$nama_barang','$qty','$harga','$sewa','$des','0','',NOW())");

		if ($query) {
			header("location:../../pesan.php?message=success");
		}
		else{
			header("location:../../pesan.php?message=error");	
		}
	}
}
else{
	header('location:../../login.php?message=akun');
}
?>