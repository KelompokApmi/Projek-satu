<?php 
include 'koneksi.php';
$id=$_POST['id'];
$a=$_POST['nama'];
$b=$_POST['jenis_kelamin'];
$d=$_POST['tempatlahir'];
$e=$_POST['tgl'];
$f=$_POST['golongan_darah'];
$g=$_POST['telephone'];

$s=mysqli_query($kon,"UPDATE biodata SET nama='$a',jenis_kelamin='$b',tempat_lahir='$d',tanggal_lahir='$e',golongan_darah='$f',telephone='$g' where id_biodata='$id'") or die(mysqli_error());{
	?>
	 <script type="text/javascript">
 	alert("Data Berhasil Disimpan");
 	window.location.href='../lap_anggota.php';
 </script>
 <?php
}


 ?>