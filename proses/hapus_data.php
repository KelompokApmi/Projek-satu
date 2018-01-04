<?php 
include 'koneksi.php';
 ?>
<?php 
$id =$_GET['id'];
$db=mysqli_query($kon,"DELETE FROM biodata WHERE id_biodata='$id'") or die(mysqli_error());
{?> 
<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="../lap_anggota.php";
</script>
<?php } ?>