<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_biodata            	= $_POST['id_donor'];
$event				= $_POST['event'];
$tempat         	= $_POST['tempat'];
$tanggal			= $_POST['tanggal'];
$telephone   				= $_POST['telephone'];

// query SQL untuk insert data
$query="INSERT INTO donor SET id_biodata='$id_biodata',event='$event',tempat='$tempat',tanggal_donor='$tanggal',telephone='$telephone'";
mysqli_query($kon,$query);{?>
	 <script type="text/javascript">
 	alert("Data Berhasil Disimpan");
 	window.location.href='../das_pencatatan_pendonor.php';
 </script>
 <?php
}


 ?>