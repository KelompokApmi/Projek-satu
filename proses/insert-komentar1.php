<?php
include "koneksi.php";
$tglk			= date('d-m-Y');
$nama	 		= $_POST['nama'] ;
$email			= $_POST['email'] ;
$komentar		= $_POST['komentar'] ;
$flag ="1";



$query_insert = "INSERT INTO komentar SET tglk='$tglk',nama='$nama',email='$email',komentar='$komentar',flag='$flag'";

$insert = mysqli_query($kon,$query_insert);	
if($insert)
	{?>
	<script type="text/javascript">
	alert("komentar Berhasil Di Simpan");
	window.location.href="../sejarah_pmi.php";
</script>
        <?php }
else
	{
	echo "Gagal update ... ";
	}
?>