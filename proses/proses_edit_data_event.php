<?php 
include 'koneksi.php';
$id=$_POST['id'];
$a=$_POST['namaevent'];
$b=$_POST['tempatevent'];
$d=$_POST['tgl'];
$e=$_POST['jam'];

$s=mysqli_query($kon,"UPDATE event SET nama_event='$a',tempat_event='$b',tanggal_event='$d',jam='$e' where id_event='$id'") or die(mysqli_error());{
	?>
	 <script type="text/javascript">
 	alert("Data Berhasil Disimpan");
 	window.location.href='../lap_event.php';
 </script>
 <?php
}


 ?>