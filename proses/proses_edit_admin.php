<?php
include 'koneksi.php';
$nama				 = $_POST['nama'];
$tempat_lahir		 = $_POST['tempat_lahir'];
$tanggal 			 = $_POST['tanggal'];
$jenis_kelamin		 = $_POST['jenis_kelamin'];
$alamat				 = $_POST['alamat'];
$golongan_darah		 = $_POST['golongan_darah'];
$telephone			 = $_POST['telephone'];
$id 				 = $_POST['id'];

$edit	= mysqli_query($kon, "UPDATE biodata set
													  nama 			='$nama',
													  tempat_lahir  ='$tempat_lahir',
													  tanggal_lahir ='$tanggal',
													  jenis_kelamin ='$jenis_kelamin',
													  alamat 		='$alamat',
													  golongan_darah='$golongan_darah'
													  telephone 	='$telephone',
													  where id_biodata	='$id'");
if ($edit) {
	header('location: ../lap_anggota.php');
}
else {
	echo "Update Gagal";
}
?>