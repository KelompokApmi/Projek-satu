<?php 
include 'koneksi.php';
 ?>
<?php 
$id =$_GET['id'];
$db=mysqli_query($kon,"DELETE FROM event WHERE id_event='$id'") or die(mysqli_error());
{?> 
<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="../lap_event.php";
</script>
<?php } ?>