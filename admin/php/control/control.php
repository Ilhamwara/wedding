<?php 

include 'koneksi.php';

$page = $_GET['page'];


$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$tersedia = $_POST['tersedia'];
$rusak = $_POST['rusak'];
$baru = $_POST['baru'];
$harga = $_POST['harga'];
$desk = $_POST['desk'];





$folder = "../../../img/barang/";

$simpan_gambar1 = $folder.basename($_FILES['foto']['name']);

//---------------------------------------- TAMBAH PRODUK ----------------------------------//

if ($page == 'tambah-barang') {


	if((!empty($_FILES['foto']['name']))){


		$foto		= $_FILES['foto']['name'];
		$type_gambar1	= $_FILES['foto']['type'];	

		if (($type_gambar1 == "image/jpeg" || $type_gambar1 == "image/jpg" || $type_gambar1 == "image/png" || $type_gambar1 == "")) {

			$sql = mysql_query("INSERT INTO barang VALUES('','$nama','$kategori','$foto','$tersedia','$rusak','$baru','$harga','$desk',NOW())");

			if ($sql){

				move_uploaded_file($_FILES['foto']['tmp_name'],$simpan_gambar1);		

				header('location:../../main.php?page=stok-barang');
			}
		}

		else{
			echo "invalid Format Image ".$type_gambar.", Back <a href='#'> input</a>";
		}

	}
}
//----------------------------------------TUTUP TAMBAH PRODUK ----------------------------------//

























//---------------------------------------- EDIT PRODUK ----------------------------------//

if ($page == 'update-barang') {

	if (isset($_GET['key'])) {

		$id = $_GET['key'];

		if((empty($_FILES['foto']['name']))){

			$sql = mysql_query("UPDATE barang SET nama='$nama',kategori='$kategori',tersedia='$tersedia',rusak='$rusak',baru='$baru',harga='$harga',deskripsi='$desk' WHERE id_produk='$id'");

			if ($sql){
				header("location:../../main.php?page=stok-barang");
			}


		}

		elseif((!empty($_FILES['foto']['name']))){


			$gambar1		= $_FILES['foto']['name'];
			$type_gambar1	= $_FILES['foto']['type'];


			if (($type_gambar1 == "image/jpeg" || $type_gambar1 == "image/jpg" || $type_gambar1 == "image/png" || $type_gambar1 == "")) {

				$sql = mysql_query("UPDATE barang SET nama='$nama',kategori='$kategori',foto='$gambar1',tersedia='$tersedia',rusak='$rusak',baru='$baru',harga='$harga',deskripsi='$desk' WHERE id_produk='$id'");

				if ($sql){

					move_uploaded_file($_FILES['foto']['tmp_name'],$simpan_gambar1);

					header('location:../../main.php?page=stok-barang');
				}
			}

			else{
				echo "invalid Format Image ".$type_gambar.", Back <a href='#'> input</a>";
			}

		}
	}
}
//----------------------------------------TUTUP EDIT PRODUK ----------------------------------//

?>