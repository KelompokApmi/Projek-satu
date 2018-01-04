<?php 
include 'koneksi.php';
 ?>
<?php 
$id =$_GET['id'];
$db=mysqli_query($kon,"DELETE FROM galeri WHERE id_galeri='$id'") or die(mysqli_error());
{?> 
<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="../galeri.php";
</script>
<?php } ?>