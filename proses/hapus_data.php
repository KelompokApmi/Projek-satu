<?php
include "koneksi.php";
$id = $_POST['id_biodata'];
$nama = $_POST['nama'];
$delete = "delete from biodata where id = '$id'";
$hasil = mysqlI_query($kon,$delete);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan nama $nama Berhasil dihapus </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} else { echo "Data gagal dihapus";
}

?>